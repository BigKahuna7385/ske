<x-layout>

    @include('partials._search')

    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card class="p-10 bg-black">
            <div class="flex flex-col items-center justify-center text-center">
                <div class="grid grid-cols-3 gap-4">
                    <div class="text-lg mt-4 text-left">
                        {{ $listing->date }}
                    </div>
                    <div class="text-xl font-bold mb-4">{{ $listing->title }}</div>
                    <div class="text-lg mt-4 text-right">
                        {{ $listing->user->name }}
                    </div>
                    <div class="col-span-3 text-lg mt-4 text-center">
                        {{ $listing->description }}
                    </div>
                </div>
            </div>
        </x-card>
        @if (auth()->user() == $listing->user)
            <x-card class="mt-4 p-2 flex space-x-6">
                <a href="/listings/{{ $listing->id }}/edit">
                    <i class="fa-solid fa-pencil"></i> Edit
                </a>
            </x-card>
        @endauth
</div>

</x-layout>
