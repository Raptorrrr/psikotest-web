<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Session;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class QuestionController extends Controller
{
    protected function rules(): array
    {
        return [
            'session_id' => ['required', Rule::exists('sessions', 'id')],
            'question' => ['nullable'],
            'image' => ['nullable'],
            'order' => ['required', 'integer'],
            'correct_answer' => ['nullable', 'array'],
            'correct_answer.*' => ['string'],
        ];
    }

    public function index(Session $session): View
    {
        return view('pages.setting.question-management.question.index', [
            'questions' => Question::query()
                ->orderBy('order', 'asc')
                ->where('session_id', $session->id)
                ->paginate(10)->withQueryString(),
            'session' => $session,
        ]);
    }

    public function create(Session $session){
        return view('pages.setting.question-management.question.create', [
            'session' => $session,
        ]);
    }

    public function store(Request $request, Session $session): RedirectResponse
    {
        $filtered = $request->validate($this->rules());

        $question = Question::query()->create([
            'session_id' => $filtered['session_id'],
            'question' => $filtered['question'],
            'image' => $filtered['image'] ?? null,
            'order' => $filtered['order'],
            'correct_answer' => $filtered['correct_answer'],
        ]);

        return redirect()->route('setting.question.index', ['session' => $session->id]);
    }

    public function edit(Session $session, Question $question){
        return view('pages.setting.question-management.question.edit', [
            'question' => $question,
            'session' => $session,
        ]);
    }

    public function update(Request $request, Session $session, Question $question): RedirectResponse
    {
        $filtered = $request->validate($this->rules());

        $question->session_id = $filtered['session_id'];
        $question->question = $filtered['question'];
        $question->image = null;
        $question->order = $filtered['order'];
        $question->correct_answer = $filtered['correct_answer'];
        $question->save();

        return redirect()->route('setting.question.index', ['session' => $session->id]);
    }

    public function destroy(Session $session, Question $question): RedirectResponse
    {
        $question->delete();

        return redirect()->route('setting.question.index', ['session' => $session->id]);
    }
}
