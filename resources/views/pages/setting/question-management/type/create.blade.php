<div class="modal fade modal-primary" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('setting.type.store') }}" method="POST">
                @csrf
                <div class="modal-header d-block">
                    <div class="card bg-main text-white p-3 mb-0">
                        <h3 class="my-2 font-weight-bold">Tambah Tipe Soal</h3>
                        <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="order">{{ __('Urutan Tes') }}</label>
                        <input type="number" class="form-control" name="order" min="0" placeholder="Masukkan Urutan Tes">
                    </div>
                    <div class="form-group">
                        <label for="name">{{ __('Tipe Soal') }}</label>
                        <input type="text" class="form-control" name="name" placeholder="Masukkan Tipe Soal">
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
