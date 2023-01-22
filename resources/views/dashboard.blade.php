@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Psikotes Biromarini', 'navName' => 'Dashboard', 'activeButton' => 'dashboard'])

@section('content')
<div class="content">
    <div class="container-fluid">
        <h2 class="text-center">Psikotest</h2>
        <p class="text-justify">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
            make a type specimen book. It has survived not only five centuries, but also the leap into electronic
            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
            PageMaker including versions of Lorem Ipsum.
        </p>
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
                                href="{{ route('test.index', ['slug' => $firstTypeSlug, 'session' => $first_session_id]) }}"
                            >
                                Mulai
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End Modal -->
        </div>
    </div>
</div>
@endsection

@push('js')
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        // demo.showNotification();

    });
</script>
@endpush
