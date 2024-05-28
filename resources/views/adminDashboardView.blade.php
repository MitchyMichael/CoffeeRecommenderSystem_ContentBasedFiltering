@extends('layout.layout')
@section('main_content')
    @php
        use App\Models\Coffee;
        use App\Models\Cafe;
        use Illuminate\Support\Facades\Session;

        $cafeId = Session::get('cafeId');
        $cafe = Cafe::find($cafeId);
        $cafeName = $cafe->cafeName;

        $coffees = Coffee::where('cafeId', $cafeId)->get();
    @endphp

    <h1>Admin dashboard view</h1>
    <h1>Cafe name: {{ $cafeName }} </h1>
    <h1>Cafe ID: {{ $cafeId }}</h1>

    @foreach ($coffees as $coffee)
        <img src="{{ $coffee->coffeePhoto }}">
        {{ $coffee->coffeeName }} <br>
    @endforeach

    <br>
    <a href="/addNewCoffee?cafeId={{ $cafeId }}">Add New Coffee</a><br>
    <a href="/cafeLanding">Go to landing page for cafe</a><br>
    <form id="logout-form" method="POST" action="/logout">
        @csrf
        <button type="submit">Log out</button>
    </form>
@endsection
