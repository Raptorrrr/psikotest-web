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
    protected function rules(Session $session = null): array
    {
        return [
            'type_id' => ['required', Rule::exists('types', 'id')],
            'session' => ['required', 'integer'],
            'time' => ['required', 'numeric'],
            'count_answer' => ['required', 'integer'],
            'intro' => ['nullable'],
            'image' => ['nullable', 'image', 'max:2048'],
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

        $type = Type::query()->where('id', $filtered['type_id'])->first();
        $image_path = $this->storeImage($request, 'image', 'images/session/' . $type->slug);

        $session = Session::query()->create([
            'type_id' => $filtered['type_id'],
            'session' => $filtered['session'],
            'time' => $filtered['time'] * 60,
            'count_answer' => $filtered['count_answer'],
            'intro' => $filtered['intro'],
            'image' => $image_path,
        ]);

        return redirect()->route('setting.session.index');
    }

    public function update(Request $request, Session $session): RedirectResponse
    {
        $filtered = $request->validate($this->rules());

        $image_path = $this->updateImage($request, 'image', 'images/session/' . $session->type->slug, $session, 'image');

        $session->type_id = $filtered['type_id'];
        $session->session = $filtered['session'];
        $session->time = $filtered['time'] * 60;
        $session->count_answer = $filtered['count_answer'];
        $session->intro = $filtered['intro'];
        $session->image = $image_path;
        $session->save();

        return redirect()->route('setting.session.index');
    }

    public function destroy(Session $session): RedirectResponse
    {
        $session->delete();

        return redirect()->route('setting.session.index');
    }
}
