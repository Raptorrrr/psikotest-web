<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rule;

class TypeController extends Controller
{
    protected function rules(Type $type = null): array
    {
        return [
            'order' => ['required', 'integer', Rule::when($type !== null,
                ['unique:types,order,' . $type?->id],
                ['unique:types']
            )],
            'name' => ['required', 'string'],
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
            'order' => $filtered['order'],
            'name' => $filtered['name'],
        ]);

        return redirect()->route('setting.type.index');
    }

    public function update(Request $request, Type $type): RedirectResponse
    {
        $filtered = $request->validate($this->rules($type));

        $type->order = $filtered['order'];
        $type->name = $filtered['name'];
        $type->save();

        return redirect()->route('setting.type.index');
    }

    public function destroy(Type $type): RedirectResponse
    {
        $type->delete();

        return redirect()->route('setting.type.index');
    }
}
