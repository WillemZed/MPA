

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($songs as $song)
                        <div class="border-solid border-b-0 border-stone-500 py-4">
                            <p style="">{{$song->title}} ({{$song->id}})</p>
                            <p>{{$song->genre->name}} ({{$song->genre_id}})</p>
                            <p>{{round($song->duration / 60000, 2)}}</p>
                            <p><a href="/artist/{{$song->artist->slug}}">{{$song->artist->name}}</a> ({{$song->artist_id}})</p>
                            <p class="text-sky-400"><a href="/song/details/{{$song->slug}}">Details</a></p>
                            <a class="text-sky-400" href="/song/session/store/{{$song->id}}">Toevoegen</a>
                        </div>
                    @endforeach
                    <a href="/genres">Go back to genres</a>
                    <br>
                    <a href="/">Return to home</a>
                    <br>
                    <a href="/playlist">Go to playlists</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
