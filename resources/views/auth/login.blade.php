@extends('layouts/app', ['activePage' => 'login', 'title' => 'Psikotest Biro Marini'])

@section('content')
<div class="full-page section-image" data-color="black" data-image="{{ asset('light-bootstrap/img/full-screen-image-2.jpg') }}" style="height: 100vh">
    <div class="content pt-auto">
        <div class="container mt-auto">
            <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                <form class="form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card card-login card-hidden">
                        <div class="card-header ">
                            <div class="row">
                                <div class="col-sm">
                                    <img src="{{ asset('light-bootstrap/img/Logo.png') }}" alt="logo" width=140 heigth=80>
                                </div>
                                <div class="col-md">
                                    <h3 style="padding:10%;">{{ __('Login Psikotes') }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="email" class="col-md-6 col-form-label">{{ __('E-Mail Address') }}</label>
                                    <div class="col-md-14">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-md-6 col-form-label">{{ __('Password') }}</label>
                                        <div class="col-md-14">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="" required autocomplete="current-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <div class="container text-center">
                                    <button type="submit" class="btn btn-warning btn-wd">{{ __('Login') }}</button>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $(document).ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>
@endpush