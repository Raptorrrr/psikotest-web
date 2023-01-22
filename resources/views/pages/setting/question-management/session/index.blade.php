@extends('pages.setting.question-management.setting-layout', ['activePage' => 'session', 'title' => 'Psikotes Biromarini', 'navName' => 'Question', 'activeButton' => 'setting'])

@section('setting-content')
    @include('components.error-alert')

    <div class="row justify-content-end py-2">
        <div class="col-md-4">
            <form role="search">
                @csrf
                <div class="input-group">
                    <i class="nc-icon nc-zoom-split align-self-center" style="font-size: 25px"></i>
                    <input type="text" value="" class="form-control border-left-0 border-right-0 border-top-0" placeholder="Search...">
                </div>
            </form>
        </div>
        <div class="col-md">
            <button class="btn btn-main btn-fill pull-right" data-toggle="modal" data-target="#createModal">
                <i class="fa fa-plus"></i>
                Tambah Sesi
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover table-striped mt-2">
                <thead>
                    <th>No</th>
                    <th>Tipe Soal</th>
                    <th>Sesi</th>
                    <th>Durasi Waktu (menit)</th>
                    <th>Jumlah Jawaban</th>
                    <th class="justify-content-end">Action</th>
                </thead>
                <tbody>
                @foreach($sessions as $key => $session)
                    <tr>
                        <td style="width: 5%">{{ $key+1 }}</td>
                        <td>{{ $session->type->name }}</td>
                        <td>{{ $session->session }}</td>
                        <td>{{ $session->time / 60 }}</td>
                        <td>{{ $session->count_answer }}</td>
                        <td class="justify-content-end">
                            <a class="btn btn-success" href="{{ URL::route('setting.question.index', ['session' => $session->id]) }}">
                                <i class="fa fa-cogs"></i>
                            </a>
                            <button class="btn btn-main ml-2" data-toggle="modal" data-target="#editModal-{{$key}}">
                                <i class="fa fa-pencil"></i>
                            </button>
                            <button class="btn btn-danger ml-2" data-toggle="modal" data-target="#deleteModal-{{$key}}">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>

                    <!-- Start Edit Modal -->
                    @include('pages.setting.question-management.session.edit')
                    <!--  End Edit Modal -->

                    <!-- Start Alert Delete -->
                    @include('components.delete-modal', ['route' => route('setting.session.destroy', $session->id)])
                    <!--  End Alert Delete -->
                @endforeach
                </tbody>
            </table>

            <div class="pull-right">
                {{ $sessions->links("pagination::bootstrap-4") }}
            </div>

            <!-- Start Create Modal -->
            @include('pages.setting.question-management.session.create')
            <!--  End Create Modal -->
        </div>
    </div>
@endsection
