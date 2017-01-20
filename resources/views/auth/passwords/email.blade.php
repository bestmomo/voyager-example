@extends('layout')

@section('header')
    Reset Password
@endsection

<!-- Main Content -->
@section('content')
    @if (session('status'))
        <div class="alert-box success"><span>success : </span>{{ session('status') }}</div>
    @endif
    <form role="form" method="POST" action="{{ url('/password/email') }}">
        <div class="row uniform">
            {{ csrf_field() }}
            <div class="12u$">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email">

                @if ($errors->has('email'))
                    <span>
                        <strong style="color:red;">{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="actions">
                <button type="submit">
                    Send Password Reset Link
                </button>
            </div>
        </div>
    </form>
@endsection
