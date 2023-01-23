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
            'answers' => ['required', 'array', 'size:' . $totalQuestion],
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

    public function intro(string $slug, int $session): View
    {
        return view('pages.test.intro', [
            'slug' => $slug,
            'session' => Session::query()
                ->whereHas('type', fn ($q) => $q->where('slug', $slug))
                ->where('session', $session)->first(),
        ]);
    }

    public function finish(): View
    {
        return view('pages.test.finish');
    }

    public function index(string $slug, int $session): View
    {
        $session = Session::query()
            ->where('session', $session)
            ->whereHas('type', fn ($q) => $q->where('slug', $slug))
            ->first();

        $historyTest = HistoryTest::query()->firstOrCreate([
            'user_id' => auth()->user()->id,
            'session_id' => $session->id,
        ], [
            'user_id' => auth()->user()->id,
            'session_id' => $session->id,
            'start_at' => now(),
        ]);

        return view('pages.test.index', [
            'questions' => Question::query()
                ->orderBy('order', 'asc')
                ->with(['session.type', 'choices'])
                ->where('session_id', $session->id)
                ->get(),
            'start_at' => $historyTest->start_at,
            'session_time' => $session->time,
        ]);
    }

    public function store(Request $request, string $slug, int $session): RedirectResponse
    {
//        dd($request->all());
        $newRequest = $request->all();

        $sessionModel = Session::query()
            ->whereHas('type', fn ($q) => $q->where('slug', $slug))
            ->where('session', $session)
            ->first();

        //Prepare to Move Next Test
        $nextOrderSession = Session::query()->whereHas('type', fn ($q) => $q->where('slug', $slug))
            ->where('session', $session + 1)->first();

        $nextSlugType = $slug;
        $isLastTest = 0;
        if ($nextOrderSession === null) {
            $typeOrder = Type::query()->where('slug', $slug)->first()->order;
            $nextSlugType = Type::query()->where('order', $typeOrder + 1)->first();
            if ($nextSlugType === null)
                $isLastTest = 1;
            else
                $nextSlugType = $nextSlugType->slug;
            $nextOrderSession = 1;
        } else {
            $nextOrderSession = $nextOrderSession->session;
        }

        if(HistoryTest::query()->where('user_id', auth()->user()->id)->where('session_id', $sessionModel->id)->whereNotNull('finish_at')->first()) {
            return redirect()->route('test.intro', ['slug' => $nextSlugType, 'session' => $nextOrderSession]);
        }

        $filtered = $request->is_expired == 0 ? $request->validate($this->rules($sessionModel->questions->count()), $this->rulesMessage()) : $request->all();

        if ($request['answers'] === null) {
            $filtered['answers'] = [];
            $newRequest['answers'] = [];
        }

        foreach ($filtered['answers'] as $key => $answer) {
            if($sessionModel->type->slug === 'cfit' && $sessionModel->session === 2) {
                foreach ($answer as $ans) {
                    UserAnswer::query()->create([
                        'user_id' => auth()->user()->id,
                        'question_id' => $request['question'][$key],
                        'answer' => $ans,
                    ]);
                }
            } else {
                UserAnswer::query()->create([
                    'user_id' => auth()->user()->id,
                    'question_id' => $request['question'][$key],
                    'answer' => $answer,
                ]);
            }
        }

        $this->storeHistoryTest(auth()->user()->id, $sessionModel->id, $newRequest);

        return $isLastTest ? redirect()->route('test.finish') : redirect()->route('test.intro', ['slug' => $nextSlugType, 'session' => $nextOrderSession]);
    }

    protected function storeHistoryTest(int $user_id, int $session_id, array $data): void
    {
        $correct_answer = 0;
        $wrong_answer = 0;

        $session = Session::query()->where('id', $session_id)->first();

        if ($session->type->slug !== 'epps') {
            foreach ($data['answers'] as $key => $answer) {
                $question_answer = Question::query()->where('id', $data['question'][$key])->first()->correct_answer;
                if($session->type->slug === 'cfit' && $session->session === 2) {
                    $correct_counter = 0;
                    foreach ($answer as $ans) {
                        if (in_array($ans, $question_answer))
                            $correct_counter++;
                    }

                    $correct_answer = $correct_counter === 2 ? $correct_answer + 1 : $correct_answer;
                }else {
                    if (in_array($answer, $question_answer))
                        $correct_answer++;
                }
            }
            $wrong_answer = count($data['question']) - $correct_answer;
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
