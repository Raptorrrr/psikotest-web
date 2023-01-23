<div class="modal modal-large fade modal-primary" id="editModal-{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('setting.session.update', $session->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header d-block">
                    <div class="card bg-main text-white p-3 mb-0">
                        <h3 class="my-2 font-weight-bold">Edit Sesi Soal</h3>
                        <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="type_id" class="d-block">{{ __('Tipe Soal') }}</label>
                        <select class="form-control" name="type_id">
                            <option value="" disabled>-- Pilih Tipe --</option>
                            @foreach($types as $type)
                                <option value="{{ $type->id }}" @if($type->id === $session->type_id) selected @endif>{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="session">{{ __('Sesi Soal') }}</label>
                        <input type="number" class="form-control" name="session" min="0" placeholder="Masukkan Sesi Soal" value="{{ $session->session }}">
                    </div>
                    <div class="form-group">
                        <label for="time">{{ __('Durasi Waktu (menit)') }}</label>
                        <input type="number" class="form-control" name="time" min="0" placeholder="Masukkan Waktu per Sesi" step="any" value="{{ $session->time / 60 }}">
                    </div>
                    <div class="form-group">
                        <label for="count_answer">{{ __('Jumlah Jawaban') }}</label>
                        <input type="number" class="form-control" name="count_answer" min="0" placeholder="Masukkan Jumlah Jawaban" value="{{ $session->count_answer }}">
                    </div>
                    <div class="form-group">
                        <label for="intro">{{ __('Intro') }}</label>
                        <textarea name="intro" class="form-control" id="ckeditor-edit-{{ $key }}" placeholder="Masukkan Intro" rows="3">
                            {!! $session->intro !!}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">{{ __('Gambar (opsional)') }}</label>
                        <div class="text-center" id="preview-container-edit-{{ $key }}">
                            <img id="preview-image-before-upload-edit-{{ $key }}" src="{{ $session->image !== null ? Storage::url($session->image) : asset('images/no-image.png') }}"
                                 alt="preview image" style="max-height: 500px;">
                        </div>
                        <input type="file" class="form-control-file" id="image-edit-{{ $key }}" name="image">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-fill btn-simple" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-main btn-fill btn-simple">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('js')
    <script>
        ClassicEditor
            .create( document.querySelector( '#ckeditor-edit-{!! json_encode($key) !!}'), {
                toolbar: [ 'heading', 'bold', 'italic', 'outdent', 'indent', 'link', 'undo', 'redo', 'numberedList', 'bulletedList' ]
            } )
            .then( editor => {
                // console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );

        $(document).ready(function (e) {
            const key = {!! json_encode($key) !!}
            $('#image-edit-' + key).change(function(){
                let reader = new FileReader();

                reader.onload = (e) => {
                    $('#preview-image-before-upload-edit-' + key).attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });
        });
    </script>
@endpush
