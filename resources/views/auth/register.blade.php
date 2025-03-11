@extends('layouts.login')

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h1>Create Account</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            <label for="name">Username</label>
            <input type="text" class="form-control" id="name" placeholder="Username" required name="name" value="{{ old('name') }}" />
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email" required name="email" value="{{ old('email') }}" />
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" required name="password" value="{{ old('password') }}" />
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm Password" required name="password_confirmation" />
        </div>
        <div>
            <button type="submit" class="btn btn-default submit">Submit</button>
        </div>

        <div class="clearfix"></div>

        <div class="separator">
            <p class="change_link">Already a member ?
                <a href="/login" class="to_register"> Log in </a>
            </p>

            <div class="clearfix"></div>
            <br />

            <div>
                <h1>Ciroes</h1>
                <p>©2025 All Rights Reserved.</p>
            </div>
        </div>
    </form>
@endsection
