@extends('layouts.auth')

@section('content')

    <div class="card-body">
        <form method="POST" role="form" action="{{ route('register') }}">
            @csrf

            <div class="form-group">

                <input type="text" name="name" id="name" tabindex="1"
                       class="form-control @error('name') is-invalid @enderror" placeholder="Username"
                       value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror

            </div>

            <div class="form-group">
            <!--  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                <input type="email" name="email" id="email" tabindex="1" class="form-control"
                       for="email @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}"
                       value="{{ old('email') }}" required autocomplete="email">

            <!--
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"> -->

                @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror

            </div>

            <div class="form-group">
            <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                <input type="password" name="password" id="password" tabindex="2"
                       class="form-control @error('password') is-invalid @enderror" placeholder="Password" required
                       autocomplete="new-password">


            <!-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> -->

                @error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror

            </div>

            <div class="form-group">
            <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> -->

                <input type="password" name="password_confirmation" id="password-confirm" tabindex="2"
                       class="form-control" placeholder="Confirm Password" required autocomplete="new-password">

                <!-- <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> -->

            </div>

            <div class="form-group">
                <strong>Role:</strong>
                {!! Form::select('roles[]', array('Admin'=>'Admin', 'User'=>'User'), array('class' => 'form-control','multiple')) !!}
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <button type="submit" tabindex="4" class="form-control btn btn-register">{{ __('Register') }}
                        </button>
                    </div>
                </div>
            </div>

        </form>
    </div>

@endsection
