<div wire:poll="getNotificationCount" x-data="{isOpen: false}" class="relative">
    <button @click="isOpen = !isOpen
        if(isOpen) {
            Livewire.dispatch('getNotifications')
        }
       "
    >
        <svg class="h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
        </svg>
        @if($notificationCount)
            <div class="absolute rounded-full bg-red text-white text-xxs w-6 h-6 flex justify-center items-center border-2 -top-1 -right-1"
            >{{ $notificationCount }}</div>
            @endif
    </button>
    <ul
        x-show.transition.origin.top="isOpen"
        @click.away="isOpen = false"
        x-cloak
        @keydown.escape.window="isOpen = false"
        class="absolute text-left text-gray-700 text-sm w-76 md:w-96 bg-white shadow-dialog rounded-xl max-h-128 overflow-y-auto z-10 -right-28
                                    md:-right-12"
    >
        @if($notifications->isNotEmpty() && !$isLoading)
        @foreach ($notifications as $notification)
            <li>
                <a
                    href="{{ route('idea.show', $notification->data['idea_slug']) }}"
                    @click.prevent="
                        isOpen = false
                    "
                    wire:click.prevent="markAsRead('{{ $notification->id }}')"
                    class="flex hover:bg-gray-100 transition duration-150 ease-in px-5 py-3"
                >
                    <img src="{{ $notification->data['user_avatar'] }}" class="rounded-xl w-10 h-10" alt="avatar">
                    <div class="ml-4">
                        <div class="line-clamp-6">
                            <span class="font-semibold">{{ $notification->data['user_name'] }}</span> commented on
                            <span class="font-semibold">{{ $notification->data['idea_title'] }}</span>:
                            <span>"{{ $notification->data['comment_body'] }}"</span>
                        </div>
                        <div class="text-xs text-gray-500 mt-2">{{ $notification->created_at->diffForHumans() }}</div>
                    </div>
                </a>
            </li>
        @endforeach
            <li class="border-t border-gray-300 text-center">
                <button
                    wire:click="markAllAsRead"
                    @click="isOpen = false"
                    href="#"
                    class="w-full block font-semibold hover:bg-gray-100 px-5 py-4">Mark all as read</button>
            </li>
            @elseif($isLoading)
                @foreach(range(1,3) as $item)
                    <li class="animate-pulse flex items-center transition duration-150 ease-in px-5 py-3">
                        <div class="bg-gray-200 rounded-xl w-10 h-10"> </div>
                        <div class="flex-1 ml-4 space-y-2">
                            <div class="bg-gray-200 w-full rounded h-4"></div>
                            <div class="bg-gray-200 w-full rounded h-4"></div>
                            <div class="bg-gray-200 w-1/2 rounded h-4"></div>
                        </div>
                    </li>
                @endforeach
        @else
            <div class="mx-auto w-70 mt-12">
                <div class="text-gray-400 text-center font-bold mt-6">No new notifications were found... </div>
            </div>
        @endif

    </ul>
</div>
