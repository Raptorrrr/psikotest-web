<div class="modal fade modal-primary" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('setting.user.store') }}" method="POST">
                @csrf
                <div class="modal-header d-block">
                    <div class="card bg-main text-white p-3 mb-0">
                        <h3 class="my-2 font-weight-bold">Tambah Peserta</h3>
                        <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">{{ __('Nama') }} <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __('E-mail') }} <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="email" placeholder="Masukkan E-mail">
                    </div>
                    <div class="form-group">
                        <label for="nik">{{ __('NIK') }} <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="nik" placeholder="Masukkan NIK">
                    </div>
                    <div class="form-group">
                        <label for="address">{{ __('Alamat') }}</label>
                        <input type="text" class="form-control" name="address" placeholder="Masukkan Alamat">
                    </div>
                    <div class="form-group">
                        <label for="phone">{{ __('No HP') }}</label>
                        <input type="text" class="form-control" name="phone" placeholder="Masukkan No HP">
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
