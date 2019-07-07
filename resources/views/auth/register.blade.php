@extends('../layouts.auth')
@section('title', 'Sign up')

@section('content-auth')
<form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <div>
                <input id="name" type="text" class="form-control inputs @error('name')
                is-invalid @enderror" name="name" value="{{ old('name') }}"
                required autocomplete="name" autofocus placeholder="your name">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div>
                <input id="email" type="email" class="form-control inputs @error('email')
                is-invalid @enderror" name="email" value="{{ old('email') }}"
                required autocomplete="email" placeholder="your email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div>
                <input id="handle" type="text" class="form-control inputs @error('handle')
                is-invalid @enderror" name="handle" value="{{ old('handle') }}"
                required autocomplete="handle" autofocus placeholder="your handle">

                @error('handle')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            </div>

        <div class="form-group">
            <div>
                <input id="password" type="password" class="form-control inputs @error('password') is-invalid @enderror"
                name="password" required autocomplete="new-password" placeholder="password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div>
                <input id="password-confirm" type="password" class="form-control inputs"
                name="password_confirmation" required autocomplete="new-password"
                placeholder="confirm password">
            </div>
        </div>

        <div class="form-group">
            <div>
                <button type="submit" class="btn btn-primary auth-btn">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
@endsection
