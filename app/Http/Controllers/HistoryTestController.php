<?php

namespace App\Http\Controllers;

use App\Models\HistoryTest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class HistoryTestController extends Controller
{
    public function index(): View  //view all Participant
    {
        // $historyTest = HistoryTest::query()->groupBy('user_id')
        //     ->whereHas('user', function ($q) {
        //         $q->where('role', 'participant');
        //     })
        //     ->paginate(10);

        return view('pages.result.index', [
            // 'histories' => HistoryTest::query()->whereHas('user', function ($q) {
            //     $q->where('role', 'participant');
            // })->paginate(10)->withQueryString()
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
            })->get()
        ]);
    }

    public function detailSKB(): View
    {
        return view('pages.result.detail.skb');
    }

    public function detailEPPS(): View
    {
        return view('pages.result.detail.epps');
    }
}
