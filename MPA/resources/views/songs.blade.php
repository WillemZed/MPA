@extends('components.layout')
@section('content')
    @foreach ($songs as $song)
        <div>
            <p>{{$song->title}}
            <br>
            <p>{{$song->genre->name}}</p>
            <br>
            <p><a href="artist/{{$song->artist->slug}}">{{$song->artist->name}}</a></p>
            <br>
            <p><a href="song/details/{{$song->slug}}">details</a></p>
        </div>
    @endforeach
    <a href="/genres">Go back to genres</a>
    <br>
    <a href="/">Return to home</a>
@endsection
