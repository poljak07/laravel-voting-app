<x-app-layout>
<div>
    <a href="{{ $backUrl }}" class="flex items-center font-semibold hover:underline">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>

        <span class="ml-2">All ideas (or back to chosen category with filters)</span>
    </a>
</div>


    <livewire:idea-show
        :idea="$idea"
        :votesCount="$votesCount"
    />

    @can('update', $idea)
        <livewire:edit-idea
        :idea="$idea"
        />
    @endcan

    <div class="comments-container relative space-y-6 md:ml-22 pt-4 my-8 mt-1">
            <div class="comment-container relative bg-white rounded-xl flex mt-4">
                <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                    <div class="flex-none mx-4">
                        <a href="#">
                            <img src="{{ $idea->user->getAvatar()  }}" alt="avatar" class="w-14 h-14 rounded-xl">
                        </a>
                    </div>

                    <div class="w-full md:mx-4">
                        <div class="text-gray-600 mt-3">
                            Sed tempor massa ac felis lobortis tincidunt. Duis odio eros, sodales sed turpis dignissim, gravida feugiat leo. Maecenas mattis massa quam, vitae lobortis arcu bibendum sit amet. Mauris iaculis tempor luctus. Cras ut libero pellentesque, egestas urna ut, efficitur orci. Pellentesque vestibulum viverra dignissim. Morbi semper enim tincidunt dictum ultrices. Proin non justo ac nibh faucibus vulputate. Pellentesque lacus tellus, consequat eu pretium ut, dictum sit amet orci.
                        </div>
                        <div class="flex items-center justify-between mt-6">
                            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                                <div class="font-bold text-gray-900">John Doe</div>
                                <div>&bull;</div>
                                <div>10 hours ago</div>
                            </div>
                            <div
                                x-data="{isOpen: false }"
                                class="flex items-center space-x-2">
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

                                        class="absolute text-left w-44 font-semibold bg-white shadow-dialog rounded-xl z-10 py-3 md:ml-8
                                        top-8 md:top-6 right-0 md:left-0">
                                        <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Mark as Spam</a></li>
                                        <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Delete Post</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end comment-container -->
        {{-- <div class="is-admin comment-container relative bg-white rounded-xl flex mt-4">
                <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                    <div class="flex-none mx-4">
                        <a href="#">
                            <img src="{{ $idea->user->getAvatar()  }}" alt="avatar" class="w-14 h-14 rounded-xl">
                        </a>
                        <div class="text-center uppercase text-blue text-xxs font-bold mt-1">Admin</div>
                    </div>

                    <div class="w-full mx-4">
                            <h4 class="text-xl font-semibold">
                                <a href="#" class="hover:underline"> A random title can go here</a>
                            </h4>
                        <div class="text-gray-600 mt-3">
                            Sed tempor massa ac felis lobortis tincidunt. Duis odio eros, sodales sed turpis dignissim, gravida feugiat leo. Maecenas mattis massa quam, vitae lobortis arcu bibendum sit amet. Mauris iaculis tempor luctus. Cras ut libero pellentesque, egestas urna ut, efficitur orci. Pellentesque vestibulum viverra dignissim. Morbi semper enim tincidunt dictum ultrices. Proin non justo ac nibh faucibus vulputate. Pellentesque lacus tellus, consequat eu pretium ut, dictum sit amet orci.
                        </div>
                        <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                                <div class="font-bold text-blue">Andrea</div>
                                <div>&bull;</div>
                                <div>10 hours ago</div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="relative bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in rounded-full h-7">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                    </svg>


                                    <ul class="absolute hidden text-left w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                        <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Mark as Spam</a></li>
                                        <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Delete Post</a></li>
                                    </ul>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end comment-container --> --}}


        </div> <!-- end comments-container -->

</x-app-layout>
