@extends('layout.layout')
@section('main_content')
    @php
        use App\Models\Coffee;
        use App\Models\Cafe;
        use Illuminate\Support\Facades\Session;

        $cafeId = Session::get('cafeId');
        $cafe = Cafe::find($cafeId);
        $cafeName = $cafe->cafeName;
    @endphp

    <h1>Admin dashboard view</h1>
    <h1>Cafe name: {{ $cafeName }} </h1>
    <h1>Cafe ID: {{ $cafeId }}</h1>

    @php
        $coffees = Coffee::where('cafeId', $cafeId)->get();
    @endphp

    @foreach ($coffees as $coffee)
        <img src="{{ $coffee->coffeePhoto }}">
        {{ $coffee->coffeeName }} <br>
    @endforeach

    <br>
    <a href="/addNewCoffee?cafeId={{ $cafeId }}">Add New Coffee</a>
    <br>
    <a href="/">To Landing Page</a>
@endsection
