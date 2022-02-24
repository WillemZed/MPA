@extends('components.layout')
@section('content')
    <div>
        {{$song->title}}
        <br>
        {{$song->artist->name}}
        <p>
            <a href="{{$song->slug}}/edit"><i class="fas fa-edit"></i></a>

        <form method="POST" action="delete/{{$song->id}}">
            @csrf
            @method('delete')
            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-2 shadow-1g rounded hover:shadow"><i class="fas fa-trash-alt"></i></button>
        </form>

        </p>

    </div>
@endsection
