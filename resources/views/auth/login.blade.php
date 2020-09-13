@extends('layouts.app')

@section('content')
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <div class="row pt-5">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-5 offset-xl-2">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
        <form class="needs-validation" novalidate="" method="POST" action="{{ route('login') }}">
         @csrf
            <div class="form-group ">
                <div class="d-block">
                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} input-lg " id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Email Address">
                </div>
                 @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <div class="d-block">
                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} input-lg" id="password" type="password" name="password" required placeholder="Password">
                </div>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
              <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember-me">
                            Remember me
                        </label>
                    </div>
                    
                </div>
            </div>   
             <div class="form-group">
                 <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Login
                                </button>
                        </form>
            <div class="form-group">
                <div class="mt-5 text-muted text-center">
                    <a href="{{ route('password.request') }}"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                </div>
            </div>
        </form> 
        </div>                                 
        
    </div>
</div>
</div>
</div>
</div>
@endsection
