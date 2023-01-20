<div class="modal fade modal-primary" id="deleteModal-{{$key}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <i class="fa fa-exclamation-circle text-danger fa-100"></i>
            </div>
            <div class="modal-body text-center">
                <p>Apakah anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-fill btn-simple" data-dismiss="modal">Kembali</button>
                <form action="{{ $route }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-fill btn-simple">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
