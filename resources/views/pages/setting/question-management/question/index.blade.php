@extends('pages.setting.question-management.setting-layout', ['activePage' => 'session', 'title' => 'Psikotes Biromarini', 'navName' => 'Question', 'activeButton' => 'setting'])

@section('setting-content')
    <div class="row justify-content-end py-2">
        <div class="col-md-6">
            <div class="input-group">
                <a class="btn btn-default btn-fill" href="{{ URL::route('setting.session.index') }}">
                    <i class="fa fa-arrow-left"></i>
                    Kembali
                </a>
                <form role="search" class="ml-2">
                    @csrf
                    <div class="input-group">
                        <i class="nc-icon nc-zoom-split align-self-center" style="font-size: 25px"></i>
                        <input type="text" value="" class="form-control border-left-0 border-right-0 border-top-0" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md">
            <a class="btn btn-main btn-fill pull-right" href="{{ route('setting.question.create', ['session' => $session->id]) }}">
                <i class="fa fa-plus"></i>
                Tambah Pertanyaan
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover table-striped mt-2">
                <thead>
                <th>Nomor Soal</th>
                <th>Tipe Soal</th>
                <th>Sesi</th>
                <th class="justify-content-end">Action</th>
                </thead>
                <tbody>
                @foreach($questions as $key => $question)
                    <tr>
                        <td style="width: 10%">{{ $question->order }}</td>
                        <td>{{ $question->session->type->name }}</td>
                        <td>{{ $question->session->session }}</td>
                        <td class="justify-content-end">
                            <a class="btn btn-success" href="{{ URL::route('setting.question.choice.index', ['session' => $session->id, 'question' => $question->id]) }}">
                                <i class="fa fa-cogs"></i>
                            </a>
                            <a class="btn btn-main ml-2" href="{{ route('setting.question.edit', ['session' => $session->id, 'question' => $question->id]) }}">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <button class="btn btn-danger ml-2" data-toggle="modal" data-target="#deleteModal-{{$key}}">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>

                    <!-- Start Alert Delete -->
                    @include('components.delete-modal', ['route' => route('setting.question.destroy', ['session' => $session->id, 'question' => $question->id])])
                    <!--  End Alert Delete -->
                @endforeach
                </tbody>
            </table>

            <div class="pull-right">
                {{ $questions->links("pagination::bootstrap-4") }}
            </div>
        </div>
    </div>
@endsection
