@extends('layouts.app', ['activePage' => 'detail', 'title' => 'Psikotes Biromarini', 'navName' => 'Detail', 'activeButton' => 'historyTests'])

@section('content')
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link @if($activePage == 'cfit') active @endif" href="{{route('history-test.detail.cfit',['user'=>$user->id])}}">CFIT</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if($activePage == 'skb') active @endif" href="{{ route('history-test.detail.skb',['user'=>$user->id]) }}">SKB</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if($activePage == 'epps') active @endif" href="{{ route('history-test.detail.epps',['user'=>$user->id]) }}">EPPS</a>
    </li>
</ul>
<div class="p-3">
    @yield('setting-content')
</div>
@endsection
