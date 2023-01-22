<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\Type;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard', ['firstTypeSlug' => Type::query()->first()->slug, 'first_session_id' => Session::query()->first()->id]);
    }
}
