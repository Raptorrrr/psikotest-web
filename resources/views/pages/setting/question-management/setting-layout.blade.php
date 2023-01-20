@extends('layouts.app', ['activePage' => 'question', 'title' => 'Psikotest', 'navName' => 'Question', 'activeButton' => 'setting'])

@section('content')
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link @if($activePage == 'question') active @endif" href="{{ route('setting.question.index') }}">Pertanyaan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if($activePage == 'session') active @endif" href="{{ route('setting.session.index') }}">Sesi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if($activePage == 'type') active @endif" href="{{ route('setting.type.index') }}">Tipe</a>
        </li>
    </ul>
    <div class="p-3">
        @yield('setting-content')
    </div>
@endsection
