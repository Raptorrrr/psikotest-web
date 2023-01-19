<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TypeController extends Controller
{
    public function index(): View
    {
        return view('pages.setting.question-management.type.index', [
            'types' => Type::query()->paginate(10),
        ]);
    }
}
