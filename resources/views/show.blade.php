<x-app-layout>
<div>
    <a href="/" class="flex items-center font-semibold hover:underline">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>

        <span class="ml-2">All ideas</span>
    </a>
</div>
    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <!--    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl"> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none" viewBox="0 0 40 40"><path fill="#F06225" d="M20 0c11.046 0 20 8.954 20 20v14a6 6 0 0 1-6 6H21v-8.774c0-2.002.122-4.076 1.172-5.78a10 10 0 0 1 6.904-4.627l.383-.062a.8.8 0 0 0 0-1.514l-.383-.062a10 10 0 0 1-8.257-8.257l-.062-.383a.8.8 0 0 0-1.514 0l-.062.383a9.999 9.999 0 0 1-4.627 6.904C12.85 18.878 10.776 19 8.774 19H.024C.547 8.419 9.29 0 20 0Z"></path><path fill="#F06225" d="M0 21h8.774c2.002 0 4.076.122 5.78 1.172a10.02 10.02 0 0 1 3.274 3.274C18.878 27.15 19 29.224 19 31.226V40H6a6 6 0 0 1-6-6V21ZM40 2a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"></path></svg>
                    </a>
                </div>

                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline"> A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        Sed tempor massa ac felis lobortis tincidunt. Duis odio eros, sodales sed turpis dignissim, gravida feugiat leo. Maecenas mattis massa quam, vitae lobortis arcu bibendum sit amet. Mauris iaculis tempor luctus. Cras ut libero pellentesque, egestas urna ut, efficitur orci. Pellentesque vestibulum viverra dignissim. Morbi semper enim tincidunt dictum ultrices. Proin non justo ac nibh faucibus vulputate. Pellentesque lacus tellus, consequat eu pretium ut, dictum sit amet orci.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div
                            x-data="{isOpen: false }"
                            class="flex items-center space-x-2">
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

                                    class="absolute text-left w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end idea-container -->
    </div> <!-- End ideas container -->
    <div class="buttons-container flex items-center justify-between mt-6">
       <div class="flex items-center space-x-4 ml-6">
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
             class="absolute z-10 w-104 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4" class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900
                            border-none px-4 py-2" placeholder="Go ahead, don't be shy. Share your thoughts ..."></textarea>
                        </div>
                        <div class="flex items-center space-x-3">
                            <button
                                type="button"
                                class="flex items-center justify-center h-11 w-1/2 text-sm bg-blue
                                            font-semibold  text-white rounded-xl border border-gray-200 hover:border-blue hover:bg-blue-hover transition duration-150 ease-in
                                            px-6 py-3">

                                Post comment
                            </button>
                            <button
                                type="button"
                                class="flex items-center justify-center w-32 h-11 text-xs bg-gray-200
                                        font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                                <svg class="text-gray-600 w-4 -rotate-45" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                                </svg>

                                <span class="ml-1">Attach</span>
                            </button>
                        </div>
                    </form>
            </div>
             </div>
        <div
            x-data="{isOpen: false }"
            class="relative">
            <button
                type="button"
                @click="isOpen = !isOpen"
                class="flex items-center justify-center w-1/2 h-11 text-sm bg-gray-200
                                            font-semibold rounded-xl w-36 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">

                <span >Set Status</span>
                <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
            <div
                x-cloak
                x-show.transition.origin.top.left="isOpen"
                @click.away="isOpen = false"
                @keydown.escape.window="isOpen = false"
                class="absolute z-20 w-76 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                <form action="#" class="space-y-4 px-4 py-6">
                    <div class="space-y-2">
                        <div>
                            <label for="" class="inline-flex items-center">
                                <input type="radio" checked="" class="bg-gray-200 text-gray-900 border-none" name="radio-direct" value="1">
                                <span class="ml-2">Open</span>
                            </label>
                        </div>
                        <div>
                            <label for="" class="inline-flex items-center">
                                <input type="radio"  class="bg-gray-200 text-purple border-none" name="radio-direct" value="2">
                                <span class="ml-2">Considering</span>
                            </label>
                        </div>
                        <div>
                            <label for="" class="inline-flex items-center">
                                <input type="radio"  class="bg-gray-200 text-yellow border-none" name="radio-direct" value="3">
                                <span class="ml-2">In Progress</span>
                            </label>
                        </div>
                        <div>
                            <label for="" class="inline-flex items-center">
                                <input type="radio"  class="bg-gray-200 text-green border-none" name="radio-direct" value="4">
                                <span class="ml-2">Implemented</span>
                            </label>
                        </div>
                        <div>
                            <label for="" class="inline-flex items-center">
                                <input type="radio" class="bg-gray-200 text-red border-none" name="radio-direct" value="5">
                                <span class="ml-2">Closed</span>
                            </label>
                        </div>
                    </div>
                    <div>
                    <textarea name="update_comment" id="updpate_comments" cols="30" rows="3" class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900
                    border-none px-4 py-2" placeholder="Add an update comment (optional)"></textarea>
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

                            <span class="ml-1">Update</span>
                        </button>
                    </div>
                        <div>
                            <label for="" class="font-normal inline-flex items-center">
                                <input type="checkbox" name="notify-voters" class="rounded bg-gray-200">
                                <span class="ml-2">Notify all voters</span>
                            </label>
                        </div>
                </form>
            </div>

        </div>
       </div>

        <div class="flex items-center space-x-3 ">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                 <div class="text-xl leading-snug">12</div>
                 <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>

        <button
            type="button"
            class="w-32 h-11 flex items-center justify-center uppercase text-xs bg-gray-200
                            font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
            <span>Vote</span>
        </button>
        </div>
    </div>

        <div class="comments-container relative space-y-6 ml-24 pt-4 my-8 mt-1">
            <div class="comment-container relative bg-white rounded-xl flex mt-4">
                <div class="flex flex-1 px-4 py-6">
                    <div class="flex-none">
                        <a href="#">
                            <!--    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl"> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none" viewBox="0 0 40 40"><path fill="#F06225" d="M20 0c11.046 0 20 8.954 20 20v14a6 6 0 0 1-6 6H21v-8.774c0-2.002.122-4.076 1.172-5.78a10 10 0 0 1 6.904-4.627l.383-.062a.8.8 0 0 0 0-1.514l-.383-.062a10 10 0 0 1-8.257-8.257l-.062-.383a.8.8 0 0 0-1.514 0l-.062.383a9.999 9.999 0 0 1-4.627 6.904C12.85 18.878 10.776 19 8.774 19H.024C.547 8.419 9.29 0 20 0Z"></path><path fill="#F06225" d="M0 21h8.774c2.002 0 4.076.122 5.78 1.172a10.02 10.02 0 0 1 3.274 3.274C18.878 27.15 19 29.224 19 31.226V40H6a6 6 0 0 1-6-6V21ZM40 2a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"></path></svg>
                        </a>
                    </div>

                    <div class="w-full mx-4">
                    <!--     <h4 class="text-xl font-semibold">
                            <a href="#" class="hover:underline"> A random title can go here</a>
                        </h4> -->
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

                                        class="absolute text-left w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                        <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Mark as Spam</a></li>
                                        <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Delete Post</a></li>
                                    </ul>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end comment-container -->
            <div class="is-admin comment-container relative bg-white rounded-xl flex mt-4">
                <div class="flex flex-1 px-4 py-6">
                    <div class="flex-none">
                        <a href="#">
                            <!--    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl"> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none" viewBox="0 0 40 40"><path fill="#F06225" d="M20 0c11.046 0 20 8.954 20 20v14a6 6 0 0 1-6 6H21v-8.774c0-2.002.122-4.076 1.172-5.78a10 10 0 0 1 6.904-4.627l.383-.062a.8.8 0 0 0 0-1.514l-.383-.062a10 10 0 0 1-8.257-8.257l-.062-.383a.8.8 0 0 0-1.514 0l-.062.383a9.999 9.999 0 0 1-4.627 6.904C12.85 18.878 10.776 19 8.774 19H.024C.547 8.419 9.29 0 20 0Z"></path><path fill="#F06225" d="M0 21h8.774c2.002 0 4.076.122 5.78 1.172a10.02 10.02 0 0 1 3.274 3.274C18.878 27.15 19 29.224 19 31.226V40H6a6 6 0 0 1-6-6V21ZM40 2a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"></path></svg>
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
                        <div class="flex items-center justify-between mt-6">
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
            </div> <!-- end comment-container -->
            <div class="comment-container  relative bg-white rounded-xl flex mt-4">
                <div class="flex flex-1 px-4 py-6">
                    <div class="flex-none">
                        <a href="#">
                            <!--    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl"> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none" viewBox="0 0 40 40"><path fill="#F06225" d="M20 0c11.046 0 20 8.954 20 20v14a6 6 0 0 1-6 6H21v-8.774c0-2.002.122-4.076 1.172-5.78a10 10 0 0 1 6.904-4.627l.383-.062a.8.8 0 0 0 0-1.514l-.383-.062a10 10 0 0 1-8.257-8.257l-.062-.383a.8.8 0 0 0-1.514 0l-.062.383a9.999 9.999 0 0 1-4.627 6.904C12.85 18.878 10.776 19 8.774 19H.024C.547 8.419 9.29 0 20 0Z"></path><path fill="#F06225" d="M0 21h8.774c2.002 0 4.076.122 5.78 1.172a10.02 10.02 0 0 1 3.274 3.274C18.878 27.15 19 29.224 19 31.226V40H6a6 6 0 0 1-6-6V21ZM40 2a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"></path></svg>
                        </a>
                    </div>

                    <div class="w-full mx-4">
                        <!--     <h4 class="text-xl font-semibold">
                                <a href="#" class="hover:underline"> A random title can go here</a>
                            </h4> -->
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

                                        class="absolute text-left w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                        <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Mark as Spam</a></li>
                                        <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">Delete Post</a></li>
                                    </ul>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end comment-container -->


        </div> <!-- end comments-container -->

</x-app-layout>
