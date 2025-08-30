@extends('layout')

@section('content')
<section class="form-section">
    <div class="form-container">
        <h2 class="form-title">Login</h2>

        @if(session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login.submit') }}">
            @csrf

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-input" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn">Login</button>
            </div>
        </form>
    </div>
</section>
@endsection
