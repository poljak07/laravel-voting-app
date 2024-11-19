<x-app-layout>
    <div class="filters flex space-x-6 ">
        <div class="w-1/3 ">
            <select name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none">
                <option value="Category One">Category One</option>
                <option value="Category One">Category Two</option>
                <option value="Category One">Category Three</option>
                <option value="Category One">Category Four</option>

            </select>
        </div>

        <div class="w-1/3 ">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl px-4 py-2 border-none">
                <option value="Category One">Filter One</option>
                <option value="Category One">Filter Two</option>
                <option value="Category One">Filter Three</option>
                <option value="Category One">Filter Four</option>

            </select>
        </div>
    <div class="w-2/3 relative">

        <input type="search" placeholder="Find an idea" class="w-full rounded-xl bg-white border-none placeholder-text-gray-900 px-4 py-2 pl-8">
        <div class="absolute top-0 flex items-center h-full ml-2">
            <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
        </div>
    </div>
    </div>
</x-app-layout>
