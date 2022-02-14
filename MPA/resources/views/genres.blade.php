
@extends('components.layout')
@section('content')
    @foreach($genres as $genre)
    <div>
        <p>
            <a href="genres/{{$genre->slug}}">{{$genre->name}}</a>
                <a href="genre/{{$genre->id}}/edit"><i class="fas fa-edit"></i></a>

            <a href="genre/{{$genre->id}}/destroy"><i class="fas fa-trash-alt"></i></a>
        </p>
    </div>
    @endforeach
    <a href="/">Return to home</a>
    </div>

@endsection



