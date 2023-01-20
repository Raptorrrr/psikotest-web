<div class="modal fade modal-primary" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('setting.session.store') }}" method="POST">
                @csrf
                <div class="modal-header d-block">
                    <div class="card bg-main text-white p-3 mb-0">
                        <h3 class="my-2 font-weight-bold">Tambah Sesi Soal</h3>
                        <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="type_id" class="d-block">{{ __('Tipe Soal') }}</label>
                        <select class="form-control" name="type_id">
                            <option value="" disabled selected>-- Pilih Tipe --</option>
                            @foreach($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="session">{{ __('Sesi Soal') }}</label>
                        <input type="number" class="form-control" name="session" min="0" placeholder="Masukkan Sesi Soal">
                    </div>
                    <div class="form-group">
                        <label for="time">{{ __('Durasi Waktu (menit)') }}</label>
                        <input type="number" class="form-control" name="time" min="0" placeholder="Masukkan Waktu per Sesi">
                    </div>
                    <div class="form-group">
                        <label for="count_answer">{{ __('Jumlah Jawaban') }}</label>
                        <input type="number" class="form-control" name="count_answer" min="0" placeholder="Masukkan Jumlah Jawaban">
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
