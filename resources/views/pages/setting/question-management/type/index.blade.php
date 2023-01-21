@extends('pages.setting.question-management.setting-layout', ['activePage' => 'type', 'title' => 'Psikotest', 'navName' => 'Question', 'activeButton' => 'setting'])

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
                Tambah Tipe
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover table-striped mt-2">
                <thead>
                    <th>No</th>
                    <th>Tipe Soal</th>
                    <th class="justify-content-end">Action</th>
                </thead>
                <tbody>
                @foreach($types as $key => $type)
                    <tr>
                        <td style="width: 5%">{{ $key+1 }}</td>
                        <td>{{ $type->name }}</td>
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
                    @include('pages.setting.question-management.type.edit')
                    <!--  End Edit Modal -->

                    <!-- Start Alert Delete -->
                    @include('components.delete-modal', ['route' => route('setting.type.destroy', $type->id)])
                    <!--  End Alert Delete -->
                @endforeach
                </tbody>
            </table>

            <div class="pull-right">
                {{ $types->links("pagination::bootstrap-4") }}
            </div>

            <!-- Start Create Modal -->
            @include('pages.setting.question-management.type.create')
            <!--  End Create Modal -->
        </div>
    </div>
@endsection
