@extends('pages.test.test-layout', ['activePage' => 'test', 'title' => 'Psikotes Biromarini', 'navName' => 'Test', 'activeButton' => 'test'])

@section('content')
    <div class="container">
    <h2 class="font-weight-bold text-center mb-0 mt-3">{{ 'PSIKOTES ' . $session->type->order . ' SUBTEST ' . $session->session }}</h2>
    @if($session->image !== null)
        <div class="rules-image text-center my-5">
            <img
                src="{{ Storage::url($session->image) }}"
                alt="intro_image"
                style="max-height: 500px;"
            >
        </div>
    @elseif($session->is_import === 1)
        <div class="rules-image text-center my-5">
            <img
                src="{{ asset('images/session/' . $session->type->slug . '/' . $session->session . '.png') }}"
                alt="intro_image"
                style="max-height: 500px;"
            >
        </div>
    @endif
    <div class="rules mt-5">
        {!! $session->intro !!}
    </div>
    <div class="text-center">
        <button type="button" class="btn btn-main btn-fill" data-toggle="modal" data-target="#startModal">Mulai Tes</button>

        <!-- Start Modal -->
        <div class="modal fade modal-primary" id="startModal" tabindex="-1" role="dialog" aria-labelledby="startModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <i class="fa fa-exclamation-circle text-main fa-100"></i>
                    </div>
                    <div class="modal-body text-center">
                        <p>Apakah anda yakin ingin memulai tes?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-fill btn-simple" data-dismiss="modal">Kembali</button>
                        <a
                            class="btn btn-main btn-fill btn-simple"
                            href="{{ route('test.index', ['slug' => $session->type->slug, 'session' => $session->session]) }}"
                        >
                            Mulai
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Modal -->
    </div>
@endsection
