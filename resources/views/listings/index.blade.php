<x-layout>
    @include('partials._hero')
    <h1 class="m-4 text-5xl font-bold text-center">Berichte</h1>

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @if (count($listings) == 0)
            <p>No Listings Found</p>
        @endif

        @foreach ($listings as $listing)
            <x-listing-card :listing="$listing" />
        @endforeach

    </div>

    <div class="mt-5 p-4">
        {{ $listings->links() }}
    </div>
</x-layout>
