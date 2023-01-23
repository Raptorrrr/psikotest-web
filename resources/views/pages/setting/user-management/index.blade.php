@extends('layouts.app', ['activePage' => 'user-management', 'title' => 'Psikotes Biromarini', 'navName' => 'User Management', 'activeButton' => 'setting'])

@section('content')
    @include('components.error-alert')

    @if (Session::has('password'))
        <div class="alert alert-info alert-with-icon" data-notify="container">
            <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                <i class="nc-icon nc-simple-remove"></i>
            </button>
            <span data-notify="icon" class="nc-icon nc-key-25"></span>
            <h2>Password Peserta : <span class="font-weight-bold">{{ Session::get('password') }}</span></h2>
            <p data-notify="message">Harap mencatat password baru, sebelum menutup pesan ini</p>
        </div>
    @endif

    <div class="container-fluid mt-3">
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
                    Tambah Peserta
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover table-striped mt-2">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>NIK</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th class="justify-content-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $key => $user)
                        <tr>
                            <td style="width: 5%">{{ $users->firstItem() + $key }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->nik }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->address ?? '-' }}</td>
                            <td>{{ $user->phone ?? '-' }}</td>
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
                        @include('pages.setting.user-management.edit')
                        <!--  End Edit Modal -->

                        <!-- Start Alert Delete -->
                        {{--                    @include('components.delete-modal', ['route' => route('setting.type.destroy', $type->id)])--}}
                        <!--  End Alert Delete -->
                    @endforeach
                    </tbody>
                </table>

                <div class="pull-right">
                    {{ $users->links("pagination::bootstrap-4") }}
                </div>

                <!-- Start Create Modal -->
                @include('pages.setting.user-management.create')
                <!--  End Create Modal -->
            </div>
        </div>
    </div>
@endsection
