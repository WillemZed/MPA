
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Playlist') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($playlists as $playlist)
        <h1>{{$playlist->name}}</h1>

        @foreach ($playlist->songs as $song)

        <form method="POST" action="playlist/delete/{{$song->getOriginal('pivot_song_id')}}">
            @csrf
            @method('delete')
            <li class="indent-8">
                {{$song->title}}

                <button class="text-red-600 indent-8">delete song</button>
            </li>
        </form>

        @endforeach

    @endforeach
    <div>
        <a href="playlist/create">Create new playlist</a>
    </div>

    <div>
        <a href="/songs">go to songs</a>
    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
