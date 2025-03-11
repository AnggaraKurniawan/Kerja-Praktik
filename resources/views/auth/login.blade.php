@extends('layouts.login')  {{-- Use the login layout --}}

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h1>Login Form</h1>

        {{-- Tampilkan error untuk email atau password --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div>
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Email" required name="email" value="{{ old('email') }}" />
        </div>
        <div>
            <label for="password">Password:</label>
            <div class="input-group">
                <input type="password" class="form-control" id="password" placeholder="Password" required name="password">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>

        <script>
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');

            togglePassword.addEventListener('click', function (e) {
                // toggle the type attribute
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                // toggle the eye icon
                this.querySelector('i').classList.toggle('fa-eye');
                this.querySelector('i').classList.toggle('fa-eye-slash');
            });
        </script>
        <div>
            <button type="submit" class="btn btn-primary submit">Log in</button>
        </div>

        <div class="clearfix"></div>

        <div class="separator">
            <p class="change_link">New to site?
                <a href="{{ route('register.form') }}" class="to_register"> Create Account </a>
            </p>

            <div class="clearfix"></div>
            <br />

            <div>
                <h1>Ciroes</h1>
            </div>
        </div>
    </form>
@endsection
