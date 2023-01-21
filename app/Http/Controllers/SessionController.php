<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\Type;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class SessionController extends Controller
{
    protected function rules(): array
    {
        return [
            'type_id' => ['required', Rule::exists('types', 'id')],
            'session' => ['required', 'integer'],
            'time' => ['required', 'integer'],
            'count_answer' => ['required', 'integer'],
        ];
    }

    public function index(): View
    {
        return view('pages.setting.question-management.session.index', [
            'sessions' => Session::query()->orderBy('type_id', 'asc')->paginate(10)->withQueryString(),
            'types' => Type::query()->get(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $filtered = $request->validate($this->rules());

        $session = Session::query()->create([
            'type_id' => $filtered['type_id'],
            'session' => $filtered['session'],
            'time' => $filtered['time'] * 60,
            'count_answer' => $filtered['count_answer'],
        ]);

        return redirect()->route('setting.session.index');
    }

    public function update(Request $request, Session $session): RedirectResponse
    {
        $filtered = $request->validate($this->rules());

        $session->type_id = $filtered['type_id'];
        $session->session = $filtered['session'];
        $session->time = $filtered['time'] * 60;
        $session->count_answer = $filtered['count_answer'];
        $session->save();

        return redirect()->route('setting.session.index');
    }

    public function destroy(Session $session): RedirectResponse
    {
        $session->delete();

        return redirect()->route('setting.session.index');
    }
}
