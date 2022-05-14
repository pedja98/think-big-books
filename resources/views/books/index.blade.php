@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-bottom: 20px; margin-left: 1px;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Search') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="" method="GET">
                        <label for="book_name">Book name</label>
                        <input type="text" autocomplete="off" name="book_name" id="book_name">

                        <label for="publishing_year">Publishing year</label>
                        <select name="publishing_year" id="publishing_year">
                            <option value="">None</option>
                            <option value="<=5">Less then 5 years</option>
                            <option value="<=10">Less then 10 years</option>
                            <option value=">10">More then 10 years</option>
                        </select>

                        <button class="btn btn-primary">Search</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card-columns">
            @foreach(session('books') as $book)
            @php
                $route = (Auth::user()->role == 'admin'? 'admin' : 'member') . '/books/'.$book->id.'/';
            @endphp
            
            <a class="card book-link" href="{{ url($route) }}" >
                <img class="card-img-top" src="{{ asset('img/book.png') }}" alt="book image">
                <div class="card-body">
                    <p class="card-text"><b>{{$book->book_name}}</b></p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection