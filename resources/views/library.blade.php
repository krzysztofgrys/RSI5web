@extends('layouts')



@section('content')


    <h1>Książki w naszej bilbiotece</h1>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Tytul</th>
            <th>Autor</th>
            <th width="30">Wiecej</th>
            <th width="30">Usun</th>
        </tr>
        </thead>
        <tbody>

        @foreach($books['data'] as $book)
            <tr>
                <td>{{ ($book['id']) }}</td>
                <td>{{ ($book['title']) }}</td>
                <td>{{ ($book['author']) }}</td>
                <input type="hidden" name="id" value="{{$book['id']}}" id="id">
                <td><button type = "button" class="btn btn-primary">Wiecej</button></td>
                <td><button type = "button" class="btn btn-danger" id="delete" name="delete">Usuń</button></td>
            </tr>

        @endforeach

        </tbody>
    </table>



@endsection


@section('add')
    <h3>Dodaj ksiazke</h3>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>tytul</th>
            <th>autor</th>
            <th width="30">Dodaj</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <form method ="post" id="myForm">
            <td> <input type="text" id="title" name="title" /></td>
            <td> <input type="text" id="author" name="author" /></td>
            <td><input type="submit" /></td>
            </form>
        </tr>

        </tbody>
    </table>



@endsection
