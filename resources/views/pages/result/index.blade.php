@extends('layouts.app', ['activePage' => 'history-test', 'title' => 'Psikotes Biromarini', 'navName' => 'History Test', 'activeButton' => 'result'])

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="container-fluid">
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

                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover table-striped mt-2">
                            <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th class="justify-content-end">Hasil</th>
                            </thead>
                            <tbody>
                            @foreach($users as $key =>$user)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td class="justify-content-end">
                                        <a class="btn btn-main" href="{{route('history-test.detail.cfit',['user'=>$user->id])}}">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <div class="pull-right">
                            {{ $users->links("pagination::bootstrap-4") }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
