<x-app-layout>
    <x-slot name="title">
        {{$idea->title}} | Voting App
    </x-slot>
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

    <livewire:idea-comments :idea="$idea" />
    <x-notification-success />

    <x-modals-container :idea="$idea" />




</x-app-layout>
