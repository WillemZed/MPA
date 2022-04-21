
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Genres') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach($genres as $genre)
                        <div>
                            <p>
                                <a href="genres/{{$genre->slug}}">{{$genre->name}}</a>
                                <a href="genre/edit/{{$genre->slug}}"><i class="fas fa-edit"></i></a>

                                <a href="genre/destroy/{{$genre->id}}"><i class="fas fa-trash-alt"></i></a>
                            </p>
                        </div>
                        @endforeach
                        <a class="text-green-300" href="/">Return to home</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


