@extends('layout')

@section('content')
    <h1>All cards</h1>
    @foreach($cards as $card)
        <div><a href="/cards/{{ $card->id }}"> {{ $card->title }} </a></div>
    @endforeach

    <h3>Add a New Card</h3>
    <form method="POST" action="/cards">
        {!! csrf_field() !!}
        <div class="form-group">
            <input name="title" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Card</button>
        </div>
    </form>
@endsection