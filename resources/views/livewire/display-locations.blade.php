
@forelse($locations as $location)
<li class="relative">
    <div class="focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-gray-500 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden">
        <img class="group-hover:opacity-75 object-cover pointer-events-none" src="{{ $location->image }}" alt="">
        <button type="button" class="absolute inset-0 focus:outline-none">

        </button>
    </div>
    <div class="mt-2 flex justify-between items-center text-xs text-gray-400 font-semibold space-x-2">
        <div>2 Votes</div>
        <div>
            <button type="button" class="ml-4 bg-white rounded-full h-8 w-8 flex items-center justify-center text-red-600 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500">
                <svg class="h-5 w-5" x-description="Heroicon name: outline/heart" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>
                <span class="sr-only">Favorite</span>
            </button>
        </div>
    </div>
    <div class="mt-2">
        <a href="#" class="relative flex bg-gray-100 border border-transparent rounded-md py-2 px-8 items-center justify-center text-sm font-medium text-gray-900 hover:bg-gray-200">View Location</a>
    </div>
</li>
@empty
    <li class="relative">No Locations Found</li>
@endforelse
