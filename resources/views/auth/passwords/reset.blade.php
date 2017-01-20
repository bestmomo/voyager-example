@extends('layout')

@section('header')
    Reset Password
@endsection

@section('content')
    @if (session('status'))
        <div class="alert-box success"><span>success : </span>{{ session('status') }}</div>
    @endif
    <form role="form" method="POST" action="{{ url('/password/reset') }}">
        <div class="row uniform">
            {{ csrf_field() }}
            <input type="hidden" name="token" value="{{ $token }}">
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
                    Reset Password
                </button>
            </div>
        </div>
    </form>
@endsection
