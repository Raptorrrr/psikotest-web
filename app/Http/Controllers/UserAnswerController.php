<?php

namespace App\Http\Controllers;

use App\Models\HistoryTest;
use App\Models\Question;
use App\Models\Session;
use App\Models\Type;
use App\Models\User;
use App\Models\UserAnswer;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class UserAnswerController extends Controller
{
    protected function rules(int $totalQuestion): array
    {
        return [
            'answers' => ['required', 'array'],
            'answers.*' => ['required'],
        ];
    }

    protected function rulesMessage(): array
    {
        return [
            'answers.required' => 'Jawaban belum terpilih',
            'answers.size' => 'Jawaban belum terpilih semua'
        ];
    }

    public function index(string $slug, int $session): View
    {
        $session = Session::query()
            ->where('session', $session)
            ->whereHas('type', fn($q) => $q->where('slug', $slug))
            ->first();

//        $historyTest = HistoryTest::query()->create([
//            'user_id' => auth()->user()->id,
//            'session_id' => $session_id,
//            'start_at' => now(),
//        ]);

        return view('pages.test.index', [
            'questions' => Question::query()
                ->orderBy('order', 'asc')
                ->with(['session.type', 'choices'])
                ->where('session_id', $session->id)
                ->get(),
            'session_time' => $session->time,
        ]);
    }

    public function store(Request $request, string $slug, int $session): RedirectResponse
    {
        $sessionModel = Session::query()
            ->whereHas('type', fn ($q) => $q->where('slug', $slug))
            ->where('session', $session)
            ->first();

        $filtered = $request->validate($this->rules($sessionModel->questions->count()), $this->rulesMessage());

        foreach ($filtered['answers'] as $key => $answer)
        {
            UserAnswer::query()->create([
                'user_id' => auth()->user()->id,
                'question_id' => $request['question'][$key],
                'answer' => $answer,
            ]);
        }

        $this->storeHistoryTest(auth()->user()->id, $sessionModel->id, $request->all());

        //Prepare to Move Next Test
        $nextOrderSession = Session::query()->whereHas('type', fn ($q) => $q->where('slug', $slug))
            ->where('session', $session + 1)->first();

        $nextSlugType = $slug;
        if($nextOrderSession === null) {
            $typeOrder = Type::query()->where('slug', $slug)->first()->order;
            $nextSlugType = Type::query()->where('order', $typeOrder + 1)->first()->slug;
            $nextOrderSession = 1;
        }else {
            $nextOrderSession = $nextOrderSession->session;
        }

        return redirect()->route('test.index', ['slug' => $nextSlugType, 'session' => $nextOrderSession]);
    }

    protected function storeHistoryTest(int $user_id, int $session_id, array $data): void
    {
        $correct_answer = 0;
        $wrong_answer = 0;
        foreach ($data['answers'] as $key => $answer)
        {
            $question_answer = Question::query()->where('id', $data['question'][$key])->first()->correct_answer;
            if(in_array($answer, $question_answer))
                $correct_answer++;
            else
                $wrong_answer++;
        }

        HistoryTest::query()
            ->where('user_id', $user_id)
            ->where('session_id', $session_id)
            ->update([
                'correct_answer' => $correct_answer,
                'wrong_answer' => $wrong_answer,
                'finish_at' => now()
            ]);
    }
}
