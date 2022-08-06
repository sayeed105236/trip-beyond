@extends('layouts.layout2')

@section('content')

<div class="container" id="" tabindex="-1" role="dialog" aria-labelledby="signInModalLabel"
    aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content  btn-rounded text-center p-4">
            <div class="modal-header text-center pt-0" style="border: none">
                <h4 class="modal-title font-weight-bold" id="signInModalLabel">{{ __('Login') }}</h4>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
            </div>
            <div class="modal-body">
                <form class="contact-form" action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="form-row">
                        <div class="form-group col">
                            <input id="email" type="email" name="email" value="{{ old('email') }}" style="height: 3.7em" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-center btn-rounded @error('email') is-invalid @enderror" placeholder="email..." required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col">
                            <input id="password" type="password" name="password" value="" style="height: 3.7em" data-msg-required="Please enter password." maxlength="100" class="form-control text-center btn-rounded @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                      </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-12">
                            <button class="btn btn-tarek btn-xl btn-block btn-rounded">Login</button>
                        </div>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="btn font-weight-bold text-black text-3" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </form>


                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">

                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-block btn-xl btn-rounded"
                                        style="font-size: 13px"> <i class="fab fa-facebook-f pr-3"
                                            style="font-size: 16px"></i> Log in with Facebook</button>
                                </div>

                                <div class="col-12 pt-3">
                                    <button class="btn btn-danger btn-block btn-xl btn-rounded"
                                        style="font-size: 13px"><i class="fab fa-google pr-3"
                                            style="font-size: 16px"></i> Log in with Google</button>
                                </div>
                            </div>

                        </div>

                    </div>


                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>
@endsection
