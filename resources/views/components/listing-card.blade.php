@props(['listing'])

<x-card>
    <a class="flex" href="/listings/{{ $listing->id }}">
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
    </a>
</x-card>
