<?php

namespace App\Http\Controllers;

use App\Models\HistoryTest;
use App\Models\UserAnswer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class HistoryTestController extends Controller
{
    public function index(): View  //view all Participant
    {
        return view('pages.result.index', [

            'users' => User::query()->whereHas('historyTests')->paginate(10)->withQueryString(),
        ]);
    }

    public function detailCFIT(User $user): View
    {
        // dd(HistoryTest::query()->where('user_id', $user->id)->whereHas('session.type', function ($q) {
        //     $q->where('name', 'CFIT');
        // })->get());
        return view('pages.result.detail.cfit', [
            'user' => $user,
            'histories' => HistoryTest::query()->where('user_id', $user->id)->whereHas('session.type', function ($q) {
                $q->where('name', 'CFIT');
            })->paginate(10)->withQueryString()
        ]);
    }

    public function detailSKB(User $user): View
    {
        return view('pages.result.detail.skb', [
            'user' => $user,
            'histories' => HistoryTest::query()->where('user_id', $user->id)->whereHas('session.type', function ($q) {
                $q->where('name', 'SKB');
            })->paginate(10)->withQueryString()
        ]);
    }

    public function detailEPPS(User $user): View
    {
        // dd(UserAnswer::query()->where('user_id', $user->id)->whereHas('question', function ($q1) {
        //     $q1->where('session_id', 8);
        // }));
        return view('pages.result.detail.epps', [
            'user' => $user,
            'histories' => HistoryTest::query()->where('user_id', $user->id)->whereHas('session.type', function ($q) {
                $q->where('name', 'EPPS');
            })->get(),
            'answers' => UserAnswer::query()->where('user_id', $user->id)->whereHas('question.session.type', function ($q1) {
                $q1->where('name', 'EPPS');
            })->paginate(10)->withQueryString()
        ]);
    }
}
