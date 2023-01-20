<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\View\View;
use \Illuminate\Http\RedirectResponse;

class TypeController extends Controller
{
    protected function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'intro' => ['nullable'],
        ];
    }

    public function index(): View
    {
        return view('pages.setting.question-management.type.index', [
            'types' => Type::query()->paginate(10)->withQueryString(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $filtered = $request->validate($this->rules());

        $type = Type::query()->create([
            'name' => $filtered['name'],
            'intro' => $filtered['intro'],
        ]);

        return redirect()->route('setting.type.index');
    }

    public function update(Request $request, Type $type): RedirectResponse
    {
        $filtered = $request->validate($this->rules());

        $type->name = $filtered['name'];
        $type->intro = $filtered['intro'];
        $type->save();

        return redirect()->route('setting.type.index');
    }

    public function destroy(Type $type): RedirectResponse
    {
        $type->delete();

        return redirect()->route('setting.type.index');
    }
}
