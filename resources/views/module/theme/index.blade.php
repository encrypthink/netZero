<x-app-layout>
    <div class="p-10">
        @if(session('success'))
        <div class="mx-auto sm:px-6 lg:px-8 mb-4">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                  <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
            </div>
        </div>
        @endif

        <h2 class="font-bold text-4xl">Themes</h2>
        <div class="flex grid grid-cols-6 my-6">
            @foreach ($themes as $item)
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <img src="./screenshoot.jpg" alt="">
                <div class="flex justify-between p-7">
                    <div>
                        <p class="font-bold">{{ $item->title }}</p>
                        <p class="text-sm">{{ $item->author }}</p>
                    </div>
                    <div>
                        <span class="bg-green-500 rounded-md text-xs font-bold text-white px-2 py-1">{{ $item->activated }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>