<x-casteaching-layout>
    <div class="flex flex-col">
        <iframe
            class="sm:px-3"
            width="560"
            height="315"
            src="https://www.youtube.com/embed/btGr3mPK1dU"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

        <div>
           <h2>{{$video->title}}</h2>
        </div>
        <div>
            {{$video->description}}
        </div>
    </div>
</x-casteaching-layout>
