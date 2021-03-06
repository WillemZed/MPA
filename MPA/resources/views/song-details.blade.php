
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
                    <div>
                        {{$song->title}}
                        <br>
                        {{$song->artist->name}}
                        <p>
                        <a class="text-sky-600" href="/song/details/{{$song->slug}}/edit">edit</a>

                        <form method="POST" action="delete/{{$song->id}}">
                            @csrf
                            @method('delete')
                            <button onclick="return confirm('Are you sure?')" class="text-red-600" >Delete</button>
                        </form>

                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
