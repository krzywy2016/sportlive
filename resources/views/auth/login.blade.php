@extends('page')

@section('content')

<div class="container" style="text-align: center;">
	<div class="row">
		<div class="col-lg-3"></div>
        <div class="col-lg-6 loginpanel">
                <div class="card-header"><span style="font-size: 22px; font-color: black; padding-bottom: 1%;">Panel logowania</span><br /><br /></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('auth.E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('auth.Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4 offset-md-4"></div>
							<div class="col-md-8 offset-md-4" style="text-align: left">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('auth.Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
						   <div class="col-md-1 col-lg-3 offset-md-4"></div>
						   <div class="col-md-10 col-lg-3 offset-md-4">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('auth.Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
						
						<div class="form-group row">
						   <div class="col-md-1 col-lg-3 offset-md-4"></div>
						   <div class="col-md-10 col-lg-3 offset-md-4">
								<button type="submit" class="btn btn-primary">
                                    {{ __('auth.Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
<br />
@endsection
