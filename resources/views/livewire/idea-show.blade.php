<div class="idea-and-buttons container">

    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container bg-white rounded-xl flex mt-4">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none mx-2 md:mx-4">
                    <a href="#">
                        <img src="{{ $idea->user->getAvatar()  }}" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full mx-2 md:mx-4">
                    <h4 class="text-xl font-semibold">
                         {{ $idea->title }}
                    </h4>
                    <div class="text-gray-600 mt-3">
                        @admin
                        @if ($idea->spam_reports > 0)
                            <div class="text-red mb-2">Spam Reports: {{ $idea->spam_reports }}</div>
                        @endif
                        @endadmin
                        {{ $idea->description }}
                    </div>
                    <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="md:block hidden  font-bold text-gray-900">{{ $idea->user->name }}</div>
                            <div class="md:block hidden ">&bull;</div>
                            <div>{{ $idea->created_at->diffForHumans() }}</div>
                            <div>&bull;</div>
                            <div>{{ $idea->category->name }}</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">{{ $idea->comments->count() }} Comments</div>
                        </div>
                        <div
                            x-data="{isOpen: false }"
                            class="flex items-center space-x-2 mt-4 md:mt-0">
                            <div class="{{ $idea->status->classes }} text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                {{ $idea->status->name }}
                            </div>
                            @auth
                            <div class="relative">
                                        <button
                                            @click="isOpen = !isOpen"
                                            class="relative bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in rounded-full h-7">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                            </svg>
                                        </button>
                                <ul
                                    x-cloak
                                    x-show.transition.origin.top.left="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"

                                    class="absolute text-left w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 z-10 md:ml-8 top-8 md:top-6 right-0 md:left-0">
                                @can('update', $idea)
                                    <li><a
                                            href="#"
                                            @click="
                                            isOpen = false
                                            $dispatch('custom-show-edit-modal')
                                            "
                                            class="hover:bg-gray-100 px-5 py-3 block"
                                        >Edit Idea</a></li>
                                    @endcan
                                    @can('delete', $idea)
                                        <li><a
                                                href="#"
                                                @click="
                                            isOpen = false
                                            $dispatch('custom-show-delete-modal')
                                            "
                                                class="hover:bg-gray-100 px-5 py-3 block"
                                            >Delete Idea</a></li>
                                    @endcan
                                        <li>
                                            <a
                                                href="#"
                                                @click.prevent="
                                                isOpen = false
                                                $dispatch('custom-show-mark-idea-as-spam-modal')
                                            "
                                                class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3"
                                            >
                                                Mark as Spam
                                            </a>
                                        </li>

                                    @admin
                                    <li>
                                        <a
                                            href="#"
                                            @click.prevent="
                                                isOpen = false
                                                $dispatch('custom-show-mark-idea-as-not-spam-modal')
                                            "
                                            class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3"
                                        >
                                            Mark as Not Spam
                                        </a>
                                    </li>
                                    @endadmin
                                </ul>
                            </div>
                                @endauth
                        </div>
                        <div class="flex items-center md:hidden mt-4 md:mt-0">
                            <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                                <div class="text-sm font-bold leading-none  @if($hasVoted) text-blue @endif"">{{ $votesCount }}</div>
                                <div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>
                            </div>
                        @if($hasVoted)
                            <button
                                wire:click.prevent="vote"
                                class="w-20 bg-blue text-white border border-blue font-bold text-xxs uppercase rounded-xl hover:blue-hover transition duration-150
                                ease-in px-4 py-3 -mx-4">
                                Voted
                            </button>
                        @else
                            <button
                                wire:click.prevent="vote"
                                class="w-20 bg-gray-200 border border-gray-200 font-bold text-xxs uppercase rounded-xl hover:border-gray-400 transition duration-150
                                ease-in px-4 py-3 -mx-4">
                                Vote
                            </button>
                        @endif

                        </div>

                    </div>
                </div>
            </div>
        </div> <!-- end idea-container -->
    </div> <!-- End ideas container -->
    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex flex-col md:flex-row items-center space-x-4 md:ml-6">
            <div
                x-data="{isOpen: false }"
                class="relative">
                <button
                    type="button"
                    @click="isOpen = !isOpen"
                    class="flex items-center justify-center h-11 w-32 text-sm bg-blue
                                        font-semibold  text-white rounded-xl border border-gray-200 hover:border-blue hover:bg-blue-hover transition duration-150 ease-in
                                        px-6 py-3">

                    Reply
                </button>

                <div
                    x-cloak
                    x-show.transition.origin.top.left="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-10 w-64 md:w-104 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4" class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900
                            border-none px-4 py-2" placeholder="Go ahead, don't be shy. Share your thoughts ..."></textarea>
                        </div>
                        <div class="flex flex-col md:flex-row items-center md:space-x-3">
                            <button
                                type="button"
                                class="flex items-center justify-center h-11 w-full md:w-1/2 text-sm bg-blue
                                            font-semibold  text-white rounded-xl border border-gray-200 hover:border-blue hover:bg-blue-hover transition duration-150 ease-in
                                            px-6 py-3">

                                Post comment
                            </button>
                            <button
                                type="button"
                                class="flex items-center justify-center w-full md:w-32 h-11 text-xs bg-gray-200
                                        font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 mt-2 md:mt-0">
                                <svg class="text-gray-600 w-4 -rotate-45" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                                </svg>

                                <span class="ml-1">Attach</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        @admin
        <livewire:set-status :idea="$idea"/>
        @endadmin

        </div>

        <div class="hidden md:flex items-center space-x-3 ">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug @if($hasVoted) text-blue @endif">{{ $votesCount }}</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>
    @if($hasVoted)
                <button
                    wire:click.prevent="vote"
                    type="button"
                    class="w-32 h-11 flex items-center justify-center uppercase text-xs bg-blue
                            font-semibold rounded-xl border border-blue hover:border-blue-hover text-white transition duration-150 ease-in px-6 py-3">
                    <span>Voted</span>
                </button>
            @else
                <button
                    wire:click.prevent="vote"
                    type="button"
                    class="w-32 h-11 flex items-center justify-center uppercase text-xs bg-gray-200
                            font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                    <span>Vote</span>
                </button>
            @endif

        </div>
    </div>

</div> <!-- End ideas and button container-->
