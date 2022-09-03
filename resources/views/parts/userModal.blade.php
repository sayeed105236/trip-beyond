<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg d-flex justify-content-center align-items-center mt-5 pt-5">
        <div class="modal-content btn-rounded p-4" style="max-width: 830px">
            <div class="modal-header pt-0" style="min-width: 830px; border:none">
                <h4 class="modal-title font-weight-bold" id="defaultModalLabel">{{ __('Register') }}</h4>
            </div>
            <div class="modal-body pb-0">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <form class="contact-form" action="{{ route('register') }}" method="POST">
                            @csrf
                            {{-- <div class="contact-form-success alert alert-success d-none mt-4">
                                <strong>Success!</strong> Registration Completed.
                            </div>

                            <div class="contact-form-error alert alert-danger d-none mt-4">
                                <strong>Error!</strong> There was an error.
                                <span class="mail-error-message text-1 d-block"></span>
                            </div> --}}

                            <!--<div class="form-row">
                                <div class="form-group col-lg-6">
                                    <input type="text" style="border: 1px solid black; height: 3.7em" value="{{ old('name') }}"
                                        data-msg-required="Please enter your name." maxlength="100"
                                        class="form-control btn-rounded @error('name') is-invalid @enderror" name="name" placeholder="Name..."  required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" value="{{ old('email') }}" data-msg-required="Please enter your email address."
                                        data-msg-email="Please enter a valid email." maxlength="100"
                                        class="form-control btn-rounded @error('email') is-invalid @enderror" style="border: 1px solid black; height:3.7em"
                                        name="email" placeholder="email.."  required autocomplete="email">
                                </div>
                            </div>-->
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" style="border: 1px solid black; height: 3.7em" value="{{ old('name') }}"
                                        data-msg-required="Please enter your name." maxlength="100"
                                        class="form-control btn-rounded @error('name') is-invalid @enderror" name="name" placeholder="Name..."  required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" value="{{ old('email') }}" data-msg-required="Please enter your email address."
                                        data-msg-email="Please enter a valid email." maxlength="100"
                                        class="form-control btn-rounded @error('email') is-invalid @enderror" style="border: 1px solid black; height:3.7em"
                                        name="email" placeholder="email.."  required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="password" style="border: 1px solid black; height:3.7em"
                                        data-msg-required="Please enter password." maxlength="100"
                                        class="form-control btn-rounded @error('password') is-invalid @enderror" name="password" placeholder="Password"
                                         required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-group col">
                                    <input id="password-confirm" type="password" style="border: 1px solid black; height:3.7em" value=""
                                        data-msg-required="Please Re-enter password." maxlength="100"
                                        class="form-control btn-rounded " name="password_confirmation"
                                        placeholder="Re Enter Password" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-12">
                                    <button class="btn btn-tarek btn-xl btn-block btn-rounded">{{ __('Register') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-1 col-md-12 or-pd" style="">
                        <div class="text-center">
                            <small>or</small>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row">

                            <div class="col-12 fb-pd">
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn btn-primary btn-block btn-xl btn-rounded"
                                            style="font-size: 13px"> <i class="fab fa-facebook-f "
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
            </div>

        </div>
    </div>
</div>




<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="signInModalLabel"
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
                        <div class="form-group col-12">
                            <button class="btn btn-tarek btn-xl btn-block btn-rounded">Login</button>
                        </div>
                    </div>
                </form>

                <div class="row">
                    <div class="col-md-12">
                        <div class="text-right">
                            <a class="btn font-weight-bold text-black text-3" href="">Forget Password?</a>
                        </div>
                    </div>
                </div>


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







<div class="modal fade" id="signInAgentModal" tabindex="-1" role="dialog" aria-labelledby="signInAgentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content  btn-rounded text-center p-4 ">
            <div class=" pt-0 text-center" style="border: none">
                <h4 class="font-weight-bold d-inline-block text-center" id="signInAgentModalLabel">Agent Log In</h4>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
            </div>
            <div class="modal-body">
                <form class="contact-form" action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="form-row">
                        <div class="form-group col">
                            <input type="text" name="username" value="{{ old('username') }}" style="height: 3.7em"
                                data-msg-required="Please enter the subject." maxlength="100"
                                class="form-control text-center btn-rounded" name="subject" placeholder="Agent ID"
                                required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col">
                            <input type="password" name="password" value="" style="height: 3.7em"
                                data-msg-required="Please enter the subject." maxlength="100"
                                class="form-control text-center btn-rounded" name="subject" placeholder="Password"
                                required>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-12">
                            <button class="btn btn-tarek btn-xl btn-block btn-rounded"
                                style="font-size:11px; font-weight: 600">Enter</button>
                        </div>
                    </div>
                </form>


                <div class="d-flex justify-content-between">
                    <div>
                        <a class="btn text-black" style="font-size:11px; font-weight: 600" href="">Forget Password?</a>
                    </div>
                    <div>
                        <a class="btn text-black" style="font-size:11px; font-weight: 600"
                            href="">New? click here...</a>
                    </div>
                </div>





            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>
