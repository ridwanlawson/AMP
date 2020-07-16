@extends('layouts.authApp')

@section('content')
    <div class="container">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="dist/assets/img/bni/bni.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>{{ __('Register') }}</h4></div>

              <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                 @csrf
                    <div class="form-group">
                      <label for="frist_name">Username</label>
                      <input id="frist_name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <span>@</span>
                        </div>
                          <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>

                       
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                  
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                   
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                              <div class="float-right">
                                <a href="{{ Route('login') }}" class="text-small">
                                  Sudah Punya Akun?
                                </a>
                              </div>
                        
                    </div>
  
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-lg btn-block">
                        {{ __('Register') }}
                      </button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
