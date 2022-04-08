@extends('components.layout')
@section('content')

    {{$artist->name}} ({{$artist->id}})
<br>
    @foreach ($artist->songs as $songs)
    {{$songs->title}}
    <br>
    @endforeach


    <br>

    <a href="/genres">Go back to genres</a>
    <br>
    <a href="/">Return to home</a>
</div>
@endsection
