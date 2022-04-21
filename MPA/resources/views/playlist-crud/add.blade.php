<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("add song to playlist ") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="update/{{$playlist->id}}">
                        @method('POST')
                        @csrf

                        <label for="name">add</label>
                        <select name="songs" id="song">
                            @foreach ($songs as $songs)
                                <option value="{{$songs->id}}"> {{$songs->title}}</option>
                            @endforeach
                        </select>

                        <button type='submit' id='submit'>Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
