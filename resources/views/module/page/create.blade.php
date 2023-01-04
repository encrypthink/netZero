<x-app-layout>
    <x-head.tinymce-config/>
    <div class="py-12">
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
        <form action="{{ route('pages.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg p-7">
                    <div class="mb-7">
                        <h1 class="text-slate-900 font-extrabold text-4xl sm:text-xl lg:text-4xl">New Page</h1>
                    </div>
                    
                    <div class="flex gap-4">
                        <div class="w-4/5">
                            <div class="bg-gray-100 p-5 rounded-md shadow-sm">
                                <div class="col-span-6 sm:col-span-3 mb-4">
                                    <label for="title" class="block text-sm font-bold text-gray-700">Page Title</label>
                                    <input type="text" name="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    @error('title')
                                    <p class="text-red-400 text-xs italic my-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <x-forms.tinymce-editor/>
                                @error('body')
                                <p class="text-red-400 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="w-1/5">
                            <div class="bg-gray-100 p-5 rounded-md shadow-sm mb-3">
                                <div class="col-span-6 sm:col-span-3 mb-4 pb-3 border-b-2 border-gray-200">
                                    <p class="font-bold">Publish</p>
                                </div>
                                <button type="submit" class="py-2 px-3 w-full hover:text-amber-900 font-bold rounded-md hover:bg-yellow-400 hover:shadow-md duration-300 bg-gray-500 text-white text-center">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
