@extends('layouts.app')

@section('content')
<div class=".container-fluid d-flex align-items-center justify-content-center" style="height: 75vh; width: 100%;">
    <div class="card p-3 d-flex flex-row bg-light" style="width: 50vw; height: 50vh;">
        <img class="card-img" src="{{ asset('img/book.png') }}" alt="book image" style="width: 50%;">
        <div class="card-body" style="width: 50%;">
            <p><b>Name of the book:</b> {{$book->book_name}}</p>
            <p><b>Author:</b> {{$book->author}}</p>
            <p><b>Publisher:</b> {{$book->publisher}}</p>
            <p><b>Publishing date:</b> {{date('d/m/Y', strtotime($book->publishing_date));}}</p>
        </div>
    </div>
</div>
@endsection