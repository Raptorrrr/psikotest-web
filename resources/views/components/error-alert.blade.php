@if($errors->any())
    <div class="alert alert-danger alert-with-icon" data-notify="container">
        <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
            <i class="nc-icon nc-simple-remove"></i>
        </button>
        <span data-notify="icon" class="nc-icon nc-bell-55"></span>
        {!! implode('', $errors->all('<div>:message</div>')) !!}
    </div>
@endif
