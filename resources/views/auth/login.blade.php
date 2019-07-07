
@extends('../layouts.auth')
@section('title', 'Sign in')

@section('content-auth')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
        <div>
            <input id="email" type="email" class="form-control inputs @error('email') is-invalid @enderror"
            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Your email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <div>
            <input id="password" type="password"
            class="form-control inputs @error('password')
            is-invalid @enderror" name="password"
            required autocomplete="current-password" placeholder="your password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div>
            <button type="submit" class="btn btn-primary auth-btn">
                {{ __('Sign in') }}
            </button>
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </div>
</form>
@endsection
