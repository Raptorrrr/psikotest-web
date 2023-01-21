<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuestionChoice;
use App\Models\Session;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QuestionChoiceController extends Controller
{
    protected function rules(): array
    {
        return [
            'choice' => ['required', 'string'],
            'value' => ['required', 'string'],
            'order' => ['required', 'integer'],
        ];
    }

    public function index(Session $session, Question $question): View
    {
        return view('pages.setting.question-management.question.choice.index', [
            'questionChoices' => QuestionChoice::query()
                ->where('question_id', $question->id)
                ->paginate(10)
                ->withQueryString(),
            'session' => $session,
            'question' => $question,
        ]);
    }

    public function store(Request $request, Session $session, Question $question): RedirectResponse
    {
        $filtered = $request->validate($this->rules());

        $questionChoice = QuestionChoice::query()->create([
            'question_id' => $question->id,
            'choice' => $filtered['choice'],
            'value' => $filtered['value'],
            'order' => $filtered['order'],
        ]);

        return redirect()->route('setting.question.choice.index', ['session' => $session->id, 'question' => $question->id]);
    }

    public function update(Request $request, Session $session, Question $question, QuestionChoice $questionChoice): RedirectResponse
    {
        $filtered = $request->validate($this->rules());

        $questionChoice->choice = $filtered['choice'];
        $questionChoice->value = $filtered['value'];
        $questionChoice->order = $filtered['order'];
        $questionChoice->save();

        return redirect()->route('setting.question.choice.index', ['session' => $session->id, 'question' => $question->id]);
    }

    public function destroy(Session $session, Question $question, QuestionChoice $questionChoice): RedirectResponse
    {
        $questionChoice->delete();

        return redirect()->route('setting.question.choice.index', ['session' => $session->id, 'question' => $question->id]);
    }
}
