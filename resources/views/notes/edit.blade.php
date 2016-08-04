@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <h3>Edit Note</h3>
            <form method="POST" action="/notes/{{ $note->id }}">
                {!! csrf_field() !!}
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <textarea name="body" class="form-control">{{$note->body}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection