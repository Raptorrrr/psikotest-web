<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SessionController extends Controller
{
    public function index(): View
    {
        return view('pages.setting.question-management.session.index');
    }
}
