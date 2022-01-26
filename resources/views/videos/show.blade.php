<x-casteaching-layout>
    <div class="flex flex-col items-center">
        <iframe
            class="md:p-3 lg:p-5 xl:px-10 xl:py-5 2xl:px-20 2xl:py-10 h-4/5 w-full md:px-6 xl:px-15 xl:py-5 2xl:px-20 2xl:py-10"
            style="height: 75vh;"
            src="https://www.youtube.com/embed/btGr3mPK1dU"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>

        <div class="inline-block max-w-6xl bg-white rounded-lg shadow-lg px-4 py-4 md:px-6 xl:px-15 xl:py-5 2xl:px-20 2xl:py-10 m-4 border-t border-blue-800">
            <h2 class="text-gray-900 uppercase font-bold text-2xl tracking-tight border-b border-gray-300">
                {{$video->title}}
            </h2>

        </div>

        <div class="prose-sm md:prose lg:prose-xl 2xl:prose-2xl mx-auto px-4 py-4 md:px-6 xl:px-15 xl:py-5 2xl:px-20 2xl:py-10">
            {!! Str::markdown($video->description) !!}
        </div>
    </div>
</x-casteaching-layout>
