<div>
    @auth
            <form wire:submit.prevent="createIdea" action="#" method="POST" class="space-y-4 px-4 py-6 ">
                <div>
                    <input wire:model.defer="title" type="text" class="w-full text-sm bg-gray-100 border-none rounded-xl placeholder-gray-900 px-4 py-2" placeholder="Your Idea" required>
                    @error('title')
                    <p class="text-red text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <select wire:model.defer="category" name="category_add" id="category_add" class="w-full bg-gray-100 text-sm rounded-xl px-4 py-2 border-none">
                        @foreach($categories as $category)
                        <option value="{{ $category->id  }}">{{ $category->name }}</option>
                            @endforeach

                    </select>
                </div>
                @error('category')
                <p class="text-red text-xs mt-1">{{ $message }}</p>
                @enderror
                <div>
                    <textarea wire:model.defer="description" name="idea" id="idea" cols="30" rows="4" class="w-full bg-gray-100 rounded-xl placeholder-gray-900 text-sm px-4 py-2 border-none" placeholder="Describe your idea" required></textarea>
                    @error('description')
                    <p class="text-red text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-between space-x-3">
                    <button
                        type="button"
                        class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200
                                    font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                        <svg class="text-gray-600 w-4 -rotate-45" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                        </svg>

                        <span class="ml-1">Attach</span>
                    </button>

                    <button
                        type="submit"
                        class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue
                                    font-semibold  text-white rounded-xl border border-gray-200 hover:border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">

                        <span class="ml-1">Submit</span>
                    </button>
                </div>
            </form>
    @else
        <div class="my-6 text-center">
            <a
                wire:click.prevent="redirectToLogin"
                href="{{route('login')}}"
                class="inline-block justify-center w-1/2 h-11 text-xs bg-blue
                        font-semibold  text-white rounded-xl border border-gray-200 hover:border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">

                Login
            </a>

            <a
                wire:click.prevent="redirectToRegister"
                href="{{route('register')}}"
                class="inline-block items-center justify-center w-1/2 h-11 text-xs bg-gray-200
                        font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 mt-4">

                Sign Up
            </a>

        </div>
    @endauth
</div>

