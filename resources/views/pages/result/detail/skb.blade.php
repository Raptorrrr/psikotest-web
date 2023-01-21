@extends('pages.result.detail.setting-layout', ['activePage' => 'skb', 'title' => 'Psikotest', 'navName' => 'Question', 'activeButton' => 'historyTests'])

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

Iqbal
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

        <tr>
          <td>1</td>
          <td>9</td>
          <td>5</td>
          <td>4</td>
          <td>2,5 Menit</td>
        </tr>

      </tbody>
    </table>
  </div>
</div>
@endsection