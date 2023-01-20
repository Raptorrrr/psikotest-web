<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\View\View;
use \Illuminate\Http\RedirectResponse;

class TypeController extends Controller
{
    public function index(): View
    {
        return view('pages.setting.question-management.type.index', [
            'types' => Type::query()->paginate(10)->withQueryString(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $type = Type::query()->create([
            'name' => $request->name,
            'intro' => $request->intro,
        ]);

        return redirect()->route('setting.type.index');
    }

    public function update(Request $request, Type $type): RedirectResponse
    {
        $type->name = $request->name;
        $type->intro = $request->intro;
        $type->save();

        return redirect()->route('setting.type.index');
    }

    public function destroy(Type $type): RedirectResponse
    {
        $type->delete();

        return redirect()->route('setting.type.index');
    }
}
