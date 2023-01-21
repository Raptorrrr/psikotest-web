@extends('pages.setting.question-management.setting-layout', ['activePage' => 'session', 'title' => 'Psikotest', 'navName' => 'Question', 'activeButton' => 'setting'])

@section('setting-content')
    @include('components.error-alert')

    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('setting.question.update', ['session' => $session->id, 'question' => $question->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="session_id" value="{{ $session->id }}">
                <div class="form-group">
                    <label for="question">{{ __('Tipe Pertanyaan') }}</label>
                    <div class="form-check form-check-radio">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="type_question" id="question_text" value="question_text" @if($question->image === null) checked @endif onchange="checkVal(this)">
                            <span class="form-check-sign"></span>
                            <span>Text</span>
                        </label>
                    </div>

                    <div class="form-check form-check-radio">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="type_question" id="question_image" value="question_image" @if($question->question === null) checked @endif onchange="checkVal(this)">
                            <span class="form-check-sign"></span>
                            <span>Gambar</span>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="question">{{ __('Pertanyaan') }}</label>
                    <textarea name="question" class="form-control" id="ckeditor" placeholder="Masukkan Pertanyaan" rows="3">
                        {!! $question->question !!}
                    </textarea>
                    <input type="file" class="form-control-file" id="image" style="display: none">
                </div>

                <div class="form-group">
                    <label for="order">{{ __('Urutan Soal') }}</label>
                    <input type="number" class="form-control" name="order" min="0" placeholder="Masukkan Urutan Soal" value="{{ $question->order }}">
                </div>

                <div class="form-group">
                    <label for="correct_answer">{{ __('Kunci Jawaban') }}</label>
                    <div id="dynamic-input">
                        <div class="input-group">
                            <input type="text" class="form-control" name="correct_answer[]" placeholder="Jawaban" value="{{ $question->correct_answer[0] ?? '' }}">
                            <button type="button" class="btn btn-success ml-2" id="add">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                        @if($question->correct_answer !== null)
                            @for($repeater = 1; $repeater < count($question->correct_answer); $repeater++)
                                <div class="input-group mt-2" id="repeater-{{ $repeater }}">
                                    <input type="text" class="form-control" name="correct_answer[]" placeholder="Jawaban" value="{{ $question->correct_answer[$repeater] ?? '' }}">
                                    <button type="button" class="btn btn-danger ml-2 btn-remove" id="{{ $repeater }}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                            @endfor
                        @endif
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

            let repeater = {!! json_encode(count($question->correct_answer)) !!};

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
                    $("#image").hide()
                    $(".ck-editor").show()
                }
                else {
                    $(".ck-editor").hide()
                    $("#image").show()
                }
            }
        </script>
    @endpush
@endsection
