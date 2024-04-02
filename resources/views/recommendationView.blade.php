@extends('layout.layout')

@section('main_content')
    <div class="container">

        <h1>Recommendation Choise Page</h1>

        @foreach ($topRec as $recommendation)
            {{ $recommendation }}
        @endforeach

        <a href="/">Dashboard Page</a>

    </div>
@endsection
