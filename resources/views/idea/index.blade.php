<x-app-layout>
    <div class="filters flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-6 ">
        <div class="w-full md:w-1/3 ">
            <select name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none">
                <option value="Category One">Category One</option>
                <option value="Category One">Category Two</option>
                <option value="Category One">Category Three</option>
                <option value="Category One">Category Four</option>

            </select>
        </div>

        <div class="w-full md:w-1/3 ">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl px-4 py-2 border-none">
                <option value="Category One">Filter One</option>
                <option value="Category One">Filter Two</option>
                <option value="Category One">Filter Three</option>
                <option value="Category One">Filter Four</option>

            </select>
        </div>
    <div class="w-full md:w-2/3 relative">

        <input type="search" placeholder="Find an idea" class="w-full rounded-xl bg-white border-none placeholder-text-gray-900 px-4 py-2 pl-8">
        <div class="absolute top-0 flex items-center h-full ml-2">
            <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
        </div>
    </div>
    </div>

    <div class="ideas-container space-y-6 my-6">
        @foreach($ideas as $idea)
        <div
            x-data
            @click="
            const clicked = $event.target
            const target = clicked.tagName.toLowerCase()

            const ignores = ['button', 'svg', 'path', 'a']

            if (!ignores.includes(target)) {
                       clicked.closest('.idea-container').querySelector('.idea-link').click()
            }

            "
            class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">

            <div class="hidden md:block border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400
                    transition duration-150 ease-in font-bold text-xxs uppercase rounded-xl px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
            <div class="flex-none mx-2 md:mx-0">
                <a href="#">
                   <img src="{{ $idea->user->getAvatar()  }}" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>

                <div class="w-full flex flex-col justify-between mx-2  md:mx-4">
                    <h4 class="text-xl mt-2 md:mt-0 font-semibold">
                     <a href="{{ route('idea.show', $idea) }}" class="idea-link hover:underline"> {{$idea->title}}</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                    {{ $idea->description }}
                    </div>
                    <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>{{$idea->created_at->diffForHumans()}}</div>
                            <div>&bull;</div>
                            <div>{{ $idea->category->name }}</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div
                            x-data="{isOpen: false }"
                            class="flex items-center space-x-2 mt-4 md:mt-0"

                        >
                            <div class="{{ $idea->status->classes }} text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                {{ $idea->status->name }}
                            </div>
                            <button
                                @click="isOpen = !isOpen"
                                class="relative bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in rounded-full h-7">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                </svg>

                                <ul
                                    x-cloak
                                    x-show.transition.origin.top.left="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"

                                    class="absolute text-left w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 md:ml-8 top-8 md:top-6 right-0 md:left-0">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                        <div class="flex items-center md:hidden mt-4 md:mt-0">
                            <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                                <div class="text-sm font-bold leading-none">12</div>
                                <div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>
                            </div>
                            <button
                                class="w-20 bg-gray-200 border border-gray-200 font-bold text-xxs uppercase rounded-xl hover:border-gray-400 transition duration-150
                                ease-in px-4 py-3 -mx-4">
                                Vote
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end idea-container -->
        @endforeach
    </div> <!-- End ideas container -->

    <div class="my-8">
        {{$ideas->links()}}
    </div>
</x-app-layout>
