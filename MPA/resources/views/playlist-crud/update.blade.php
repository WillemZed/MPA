<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($edit->name) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Change {{$edit->name}} to:
                    <form method="POST" action="update/{{$edit->id}}">
                        @method('PUT')
                        @csrf

                        <label for="name">Name</label>
                        <input type="text" name="name">

                        <button type='submit' id='submit'>Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
