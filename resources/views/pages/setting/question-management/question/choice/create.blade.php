<div class="modal fade modal-primary" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('setting.question.choice.store', ['session' => $session->id, 'question' => $question->id]) }}" method="POST">
                @csrf
                <div class="modal-header d-block">
                    <div class="card bg-main text-white p-3 mb-0">
                        <h3 class="my-2 font-weight-bold">Tambah Pilihan Jawaban</h3>
                        <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="order">{{ __('Urutan Jawaban') }}</label>
                                <input type="number" class="form-control" min="0" name="order" placeholder="Masukkan Urutan Jawaban">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="choice">{{ __('Pilihan') }}</label>
                                <input type="text" class="form-control" min="0" name="choice" placeholder="Masukkan Pilihan">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="value">{{ __('Keterangan') }}</label>
                        <textarea class="form-control" placeholder="Masukkan Keterangan" name="value" rows="5" style="min-height: 100px;"></textarea>
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
