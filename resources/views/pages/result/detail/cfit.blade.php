@extends('pages.result.detail.setting-layout', ['activePage' => 'cfit', 'title' => 'Psikotest', 'navName' => 'Question', 'activeButton' => 'historyTests'])

@section('setting-content')
<div class="row justify-content-end py-2">
  <div class="col-md-auto">
    <form role="search">
      @csrf
      <div class="input-group">
        <i class="nc-icon nc-zoom-split align-self-center" style="font-size: 25px"></i>
        <input type="text" value="" class="form-control border-left-0 border-right-0 border-top-0" placeholder="Search...">
      </div>
    </form>
  </div>
</div>

<div>Nama : {{$user->name}}</div>
<div>Total Benar : {{$histories->sum('correct_answer')}}</div>
<div>Total Salah : {{$histories->sum('wrong_answer')}}</div>
<div class="row">
  <div class="col-md-12">
    <table class="table table-hover table-striped mt-2">
      <thead>
        <th>Sesi</th>
        <th>Jawaban Benar</th>
        <th>Jawaban Salah</th>
        <th>Total Soal</th>
        <th>Waktu Pengerjaan</th>
      </thead>
      <tbody>
        @foreach ($histories as $key => $history)
        <tr>
          <td>{{ $history->session->session }}</td>
          <td>{{$history->correct_answer}}</td>
          <td>{{$history->wrong_answer}}</td>
          <td>{{$history->wrong_answer + $history->correct_answer}}</td>
          <td>{{ \Carbon\Carbon::parse( $history->finish_at )->diff( $history->start_at )->format('%H:%I:%S'); }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection