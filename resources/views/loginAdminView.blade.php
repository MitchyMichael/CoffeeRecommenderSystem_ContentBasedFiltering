@extends('layout.layout')
@section('main_content')
    @php
        use Illuminate\Support\Facades\Session;

        $hasCafeId = Session::has('cafeId');
        if ($hasCafeId) {
            return redirect()->route('adminDashboard');
        }
    @endphp
    <div class="mainAdminLoginContainer">
        <div class="login-container">
            <h1>Admin Login</h1><br>
            <form action="/loginForAdmin" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <br>
                <div class="form-group">
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>
    </div>
@endsection
