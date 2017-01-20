@extends('layout')

@section('header')
    Register
@endsection

@section('content')
    <form role="form" method="POST" action="{{ url('/register') }}">
        <div class="row uniform">
            {{ csrf_field() }}
            <div class="12u$">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Name">

                @if ($errors->has('name'))
                    <span>
                        <strong style="color:red;">{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="12u$">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email">

                @if ($errors->has('email'))
                    <span>
                        <strong style="color:red;">{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="12u$">
                <input id="password" type="password" class="form-control" name="password" required placeholder="Password">

                @if ($errors->has('password'))
                    <span>
                        <strong style="color:red;">{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="12u$">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Password confirmation">
            </div>

            <div class="actions">
                <button type="submit">
                    Register
                </button>
            </div>
        </div>
    </form>
@endsection
