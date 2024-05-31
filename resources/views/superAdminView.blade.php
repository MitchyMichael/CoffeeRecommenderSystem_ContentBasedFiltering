@extends('layout.layout')
@section('main_content')
    <div class="superAdminMainContainer">
        <div>
            <h1>Super Admin - New Cafe</h1>

            <div class="form-container">
                <form action="/submit-cafe" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="cafeName" class="col-sm-5 col-form-label" style="text-align: start">Cafe Name:</label>
                        <input type="text" id="cafeName" class="form-control"name="cafeName" required>
                    </div>
                    <div class="form-group row">
                        <label for="cafeEmail" style="text-align: start"class="col-sm-5 col-form-label">Cafe Email:</label>
                        <input type="email" id="cafeEmail" class="form-control"name="cafeEmail" required>
                    </div>
                    <div class="form-group row">
                        <label for="cafePassword" style="text-align: start"class="col-sm-5 col-form-label">Cafe Password:</label>
                        <input type="password" id="cafePassword" class="form-control"name="cafePassword" required>
                    </div><br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" style="background-color:#d88b43 !important; border-color: #d88b43;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
