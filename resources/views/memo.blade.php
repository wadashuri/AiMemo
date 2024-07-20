<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Memo') }}
        </h2>
    </x-slot>

    <div class="flex flex-col min-h-screen h-screen">
        <div class="flex-grow mx-auto w-full">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg h-full">
                <div id="editorjs"></div>
            </div>
        </div>
    </div>
</x-app-layout>
