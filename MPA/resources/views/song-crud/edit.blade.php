@extends('components.layout')

@section('content')


Change {{$edit->title}} to:
<form method="POST" action="edit/{{$edit->id}}">
    @method('PUT')
    @csrf

    <label for="title">title</label>
    <input type="text" name="title">

    <br>

    <label for="genre">genre</label>
    <select name="genres" id="genre">
        @foreach ($edit->genre->all() as $genres)
            <option value="{{$genres->id}}" @if ($genres->id == $edit->genre_id)
                selected
                class=""
            @endif>{{$genres->name}}</option>
        @endforeach
    </select>

    <br>

    <label for="artist">artist</label>
    <select name="artists">
        @foreach ($edit->artist->all() as $artist)
            <option value="{{$artist->id}}" @if ($artist->id == $edit->artist_id)
                selected
                class=""
            @endif>{{$artist->name}}</option>
        @endforeach
    </select>


    <button type='submit' id='submit'>Submit</button>
</form>

@endsection
