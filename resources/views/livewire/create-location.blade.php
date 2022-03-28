<div>
    <form wire:submit.prevent="createLocation" action="#" method="POST" class=" w-1/2 space-y-4 px-4 py-6">
        <div>
            <x-input.filepond wire:model="image" />
            @if($image)
                <img class="rounded mt-2" src="{{ $image->temporaryUrl() }}" alt="">
            @endif
        </div>
        <div>
            <input wire:model.defer="latitude" type="text" class="w-full text-sm bg-gray-100 border-none rounded placeholder-gray-900 px-4 py-2" placeholder="Latitude" required>
            @error('title')
            <p class="text-red text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input wire:model.defer="longitude" type="text" class="w-full text-sm bg-gray-100 border-none rounded placeholder-gray-900 px-4 py-2" placeholder="longitude" required>
            @error('title')
            <p class="text-red text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button
                type="submit"
                class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue-400 text-white font-semibold rounded border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
            >
                <span class="ml-1">Submit</span>
            </button>
        </div>
    </form>
</div>
