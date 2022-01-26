<x-casteaching-layout>
    <div>
        <p>{{$video->title}}</p>

        <ul>
            <li>Description: {{$video->description}}</li>
            <li>Data: {{$video->published_at->format('F d') }}</li>
        </ul>
    </div>
</x-casteaching-layout>
