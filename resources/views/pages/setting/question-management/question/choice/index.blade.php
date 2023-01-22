@extends('pages.setting.question-management.setting-layout', ['activePage' => 'session', 'title' => 'Psikotes Biromarini', 'navName' => 'Question', 'activeButton' => 'setting'])

@section('setting-content')
    <div class="row justify-content-end py-2">
        <div class="col-md-6">
            <div class="input-group">
                <a class="btn btn-default btn-fill" href="{{ route('setting.question.index', ['session' => $session->id]) }}">
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
            <button type="button" class="btn btn-main btn-fill pull-right" data-toggle="modal" data-target="#createModal">
                <i class="fa fa-plus"></i>
                Tambah Pilihan Jawaban
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover table-striped mt-2">
                <thead>
                <th>No</th>
                <th>Urutan Pilihan</th>
                <th>Pilihan</th>
                <th>Keterangan</th>
                <th class="justify-content-end">Action</th>
                </thead>
                <tbody>
                @foreach($questionChoices as $key => $choice)
                    <tr>
                        <td style="width: 5%">{{ $key+1 }}</td>
                        <td>{{ $choice->order }}</td>
                        <td>{{ $choice->choice }}</td>
                        <td>{{ $choice->value }}</td>
                        <td class="justify-content-end">
                            <button class="btn btn-main" data-toggle="modal" data-target="#editModal-{{$key}}">
                                <i class="fa fa-pencil"></i>
                            </button>
                            <button class="btn btn-danger ml-2" data-toggle="modal" data-target="#deleteModal-{{$key}}">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>

                    <!-- Start Edit Modal -->
                    @include('pages.setting.question-management.question.choice.edit')
                    <!--  End Edit Modal -->

                    <!-- Start Alert Delete -->
                    @include('components.delete-modal', ['route' => route('setting.question.choice.destroy', [
                        'session' => $session->id,
                        'question' => $question->id,
                        'questionChoice' => $choice->id
                    ])])
                    <!--  End Alert Delete -->
                @endforeach
                </tbody>
            </table>

            <div class="pull-right">
                {{ $questionChoices->links("pagination::bootstrap-4") }}
            </div>

            <!-- Start Create Modal -->
            @include('pages.setting.question-management.question.choice.create')
            <!--  End Create Modal -->
        </div>
    </div>
@endsection
