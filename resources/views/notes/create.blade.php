<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('notes.store') }}" method="post">
                        @csrf
                        <x-text-input type="text" name="title" id="title" class="w-full" autocomplete="off" placeholder="Title of note ..." required></x-text-input>
                        <x-textarea name="body" id="body" rows="10" class="w-full mt-6" placeholder="Start typing here ..."></x-textarea>
                        <x-primary-button class="mt-6">Save Note</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
