@extends('layouts')



@section('content')


    <div class="col-md-6">
        <br>
        <br>
        <img src="{!! URL::asset('css/478720334.jpg') !!}" alt="Smiley face" height="500" width="500">

    </div>
    <div class="col-md-6">
        <h1>{{ $book['data']['title'] }}</h1>

        <p>
            {{ $book['data']['author'] }}
        </p>


    </div>






@endsection