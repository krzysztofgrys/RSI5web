@extends('layouts')



@section('content')
    dd($books);
    foreach($books['data'] as $book)
    {
    echo $book'<br/>';
    }



@endsection