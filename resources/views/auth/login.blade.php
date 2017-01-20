@extends('layout')

@section('header')
    Login
@endsection

@section('content')
        @if ($errors->has('email'))
            <div class="alert-box error"><span>error : </span>{{ $errors->first('email') }}</div>
        @endif  
        <form role="form" method="POST" action="{{ url('/login') }}">
        <div class="row uniform">
            {{ csrf_field() }}

            <div class="12u$">
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="E-Mail Address">
            </div>

            <div class="12u$">
                <input id="password" type="password" name="password" required placeholder="Password">
            </div>

            <div class="12u$">
                <input id="remember" name="remember" type="checkbox" {{ old('remember') ? 'checked' : ''}}>
                <label for="remember">Remember Me</label>
            </div>

            <div class="actions">
                <button type="submit">
                    Login
                </button>

                <a href="{{ url('/password/reset') }}">
                    Forgot Your Password?
                </a>
            </div>
        </div>
    </form>
@endsection
