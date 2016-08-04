@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <h1>Only one card</h1>
            <div>{{ $card->title }}</div>

            <ul class="list-group">
                @foreach($card->notes as $note)
                    <li class="list-group-item">{{ $note->body }}
                        <a href="/notes/{{ $note->id }}/edit" class="btn btn-info btn-sm pull-right" >edit</a>
                        <a href="#" class=" pull-right"> {{ $note->user->username }}</a>
                    </li>
                @endforeach
            </ul>

            <hr/>
            <h3>Add a New Note</h3>
            <form method="POST" action="/cards/{{ $card->id }}/notes">
                {!! csrf_field() !!}
                <input type="hidden" name="user_id" value="1">
                <div class="form-group">
                    <textarea name="body" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Note</button>
                </div>
            </form>
        </div>
    </div>
@endsection