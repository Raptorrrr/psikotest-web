@extends('pages.result.detail.setting-layout', ['activePage' => 'epps', 'title' => 'Psikotest', 'navName' => 'Question', 'activeButton' => 'historyTests'])

@section('setting-content')
<div class="row justify-content-end py-2">
  <div class="col-md">
    <div>Nama : {{$user->name}}</div>
  </div>
</div>


<div class="row">
  <div class="col-md-12">
    <table class="table table-hover table-striped mt-2">
      <thead>
        <th>Nomor</th>
        <th>Jawaban</th>
      </thead>
      <tbody>
        @foreach ($answers as $key => $answer)
        <tr>
          <td>{{$answer->question_id - 350}}</td>
          <td>{{$answer->answer}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="pull-right">
      {{ $answers->links("pagination::bootstrap-4") }}
    </div>
  </div>
</div>
@endsection