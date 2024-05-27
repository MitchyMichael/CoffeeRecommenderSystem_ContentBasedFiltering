@extends('layout.layout')

@section('main_content')
    <h1>Super Admin View</h1>

    <div class="form-container">
        <h2>Submit New Cafe</h2>
        <form action="/submit-cafe" method="POST">
            @csrf
            <div class="form-group">
                <label for="cafeName">Cafe Name:</label>
                <input type="text" id="cafeName" name="cafeName" required>
            </div>
            <div class="form-group">
                <label for="cafeEmail">Cafe Email:</label>
                <input type="email" id="cafeEmail" name="cafeEmail" required>
            </div>
            <div class="form-group">
                <label for="cafePassword">Cafe Password:</label>
                <input type="password" id="cafePassword" name="cafePassword" required>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection
