<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Memo') }}
        </h2>
    </x-slot>
    <div class="flex flex-col items-center justify-center min-h-screen h-screen">
        <div class="w-full h-full bg-white shadow-xl sm:rounded-lg p-6 flex-grow flex flex-col">
            <div class="flex justify-center mb-4">
                <input type="text" id="inputTitle" class="p-2 items-center justify-center rounded-lg focus:outline-none focus:ring-0 border-none" placeholder="">
            </div>
            <div id="editorjs" class="border-none border-gray-300 rounded-lg flex-grow mb-4"></div>
        </div>
    </div>
    {{-- <div class="flex flex-col items-center justify-center min-h-screen h-screen bg-gray-100">
        <div class="flex flex-col w-full h-full p-6">
            <div class=" p-6 flex-grow flex flex-col">
                <div class="mb-4">
                    <input type="text" id="memoInput" class="w-full p-2 rounded-lg focus:outline-none focus:ring-0 border-none" placeholder="Enter your text here">
                </div>
                <div id="editorjs" class="border border-gray-300 rounded-lg flex-grow"></div>
                <button id="saveButton" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-700 focus:outline-none">Save to Editor</button>
            </div>
        </div>
    </div> --}}
</x-app-layout>
