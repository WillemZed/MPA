
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
                    <form method="POST" action="store">
                        @method('post')
                        @csrf
                        <label for="">Playlist name</label>
                        <input type="text" name="name">
                        <button type="submit">Create</button>
                        @foreach($songs as $song)
                            <li>{{$song->title}}</li>
                        @endforeach

                        <a href="/playlist/create/clear">Clear session</a>
                        <br>
                        <a href="/songs">go to songs</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
