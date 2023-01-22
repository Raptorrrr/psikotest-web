@extends('pages.setting.question-management.setting-layout', ['activePage' => 'session', 'title' => 'Psikotes Biromarini', 'navName' => 'Question', 'activeButton' => 'setting'])

@section('setting-content')
    @include('components.error-alert')

    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('setting.question.store', ['session' => $session->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="session_id" value="{{ $session->id }}">
                <div class="form-group">
                    <label for="question">{{ __('Tipe Pertanyaan') }}</label>
                    <div class="form-check form-check-radio">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="type_question" id="question_text" value="question_text" checked onchange="checkVal(this)">
                            <span class="form-check-sign"></span>
                            <span>Text</span>
                        </label>
                    </div>

                    <div class="form-check form-check-radio">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="type_question" id="question_image" value="question_image" onchange="checkVal(this)">
                            <span class="form-check-sign"></span>
                            <span>Gambar</span>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="question">{{ __('Pertanyaan') }}</label>
                    <textarea name="question" class="form-control" id="ckeditor" placeholder="Masukkan Pertanyaan" rows="3"></textarea>
                    <div class="text-center" id="preview-container" style="display: none">
                        <img id="preview-image-before-upload" src="{{ asset('images/no-image.png') }}"
                             alt="preview image" style="max-height: 500px;">
                    </div>
                    <input type="file" class="form-control-file" id="image" style="display: none" name="image">
                </div>

                <div class="form-group">
                    <label for="order">{{ __('Urutan Soal') }}</label>
                    <input type="number" class="form-control" name="order" min="0" placeholder="Masukkan Urutan Soal">
                </div>

                <div class="form-group">
                    <label for="correct_answer">{{ __('Kunci Jawaban') }}</label>
                    <div id="dynamic-input">
                        <div class="input-group">
                            <input type="text" class="form-control" name="correct_answer[]" placeholder="Jawaban">
                            <button type="button" class="btn btn-success ml-2" id="add">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="pull-right">
                    <a type="button" class="btn btn-default btn-fill btn-simple" href="{{ route('setting.question.index', ['session' => $session->id]) }}">Kembali</a>
                    <button type="submit" class="btn btn-main btn-fill btn-simple">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    @push('js')
        <script>
            ClassicEditor
                .create( document.querySelector( '#ckeditor'), {
                    toolbar: [ 'heading', 'bold', 'italic', 'outdent', 'indent', 'link', 'undo', 'redo', 'numberedList', 'bulletedList' ]
                } )
                .then( editor => {
                    // console.log( editor );
                } )
                .catch( error => {
                    console.error( error );
                } );

            let repeater = 1;

            $('#add').click(function(){
                $('#dynamic-input').append('<div class="input-group mt-2" id="repeater-' + repeater + '">' +
                    '<input type="text" class="form-control" name="correct_answer[]" placeholder="Jawaban"> ' +
                    '<button type="button" class="btn btn-danger ml-2 btn-remove" id="' + repeater + '"><i class="fa fa-trash"></i></button></div>');
                repeater++;
            });

            $(document).on('click', '.btn-remove', function(){
                let button_id = $(this).attr("id");
                $('#repeater-' + button_id).remove();
            });

            function checkVal(type) {
                if(type.value === 'question_text') {
                    $("#preview-container").hide()
                    $("#image").hide()
                    $(".ck-editor").show()
                }
                else {
                    $(".ck-editor").hide()
                    $("#preview-container").show()
                    $("#image").show()
                }
            }
        </script>
    @endpush
@endsection
