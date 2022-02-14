@extends('components.layout')
@section('content')
    @foreach ($songs as $song)
        <div>
            <p>{{$song->title}}
            <br>
            <p>{{$song->genre->name}}</p>
            <br>
            <a href="artist/{{$song->artist->slug}}">{{$song->artist->name}}</a></p>
        </div>
    @endforeach
    <a href="/genres">Go back to genres</a>
    <br>
    <a href="/">Return to home</a>
@endsection
