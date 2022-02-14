<x-layout>
    @foreach($artist as $artist)
        <div>
            <p>
                {{$artist->title}}
            </p>
        </div>
    @endforeach
    <a href="/genres">Go back to genres</a>
    <br>
    <a href="/">Return to home</a>
</div>
</x-layout>
