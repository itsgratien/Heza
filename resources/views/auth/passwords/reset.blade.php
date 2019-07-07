@extends('../layouts.auth')
@section('title', 'Password Reset')

@section('content-auth')
<form method="POST" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">

    <div class="form-group">
        <div>
            <input id="email" type="email" class="form-control inputs @error('email')
            is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}"
            required autocomplete="email" autofocus placeholder="your email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <div>
            <input id="password" type="password" class="form-control @error('password')
            is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="your password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <div>
            <input id="password-confirm" type="password" class="form-control"
            name="password_confirmation" required autocomplete="new-password" placeholder="confirm password">
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Reset Password') }}
            </button>
        </div>
    </div>
</form>
@endsection
