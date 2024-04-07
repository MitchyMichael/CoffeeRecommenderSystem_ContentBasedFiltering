@extends('layout.layout')

@section('main_content')
    <div class="container">

        <h1>Recommendation Choise Page</h1>

        @foreach ($topRec as $recommendation)
            {{ $recommendation }}

            <?php $coffee = \App\Models\Coffee::find($recommendation); ?>

            <a href="#" class="coffee-link" data-coffee-id="{{ $coffee->id }}">{{ $coffee->coffeeName }}</a>
        
            <br>
        @endforeach

        <br>

        <a href="/">Dashboard Page</a>

    </div>
@endsection
