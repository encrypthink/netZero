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
        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data" x-data="{imageName: null, imagePreview: null}">
            @csrf
            <div class="mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg p-7">
                    <div class="mb-7">
                        <h1 class="text-slate-900 font-extrabold text-4xl sm:text-xl lg:text-4xl">New Post</h1>
                    </div>
                    
                    <div class="flex gap-4">
                        <div class="w-4/5">
                            <div class="bg-gray-100 p-5 rounded-md shadow-sm">
                                <div class="col-span-6 sm:col-span-3 mb-4">
                                    <label for="title" class="block text-sm font-medium text-gray-700">Post Title</label>
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
                                <div class="mb-3">
                                    <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" 
                                            name="comment_status" value="available" type="checkbox" value="" id="comments">
                                    <label class="form-check-label inline-block text-gray-800" for="comments">
                                      Allow Comments
                                    </label>
                                </div>
                                <div class="grid grid-cols-2 gap-2">
                                    <button name="status" value="draft" class="py-2 px-3 hover:text-amber-900 font-bold rounded-md hover:bg-yellow-400 hover:shadow-md duration-300 bg-gray-500 text-white text-center">Save draft</button>
                                    <button name="status" value="publish" type="submit" class="py-2 px-3 hover:text-amber-900 font-bold rounded-md hover:bg-yellow-400 hover:shadow-md duration-300 bg-gray-500 text-white text-center">Publish</button>
                                </div>
                            </div>
    
                            <div class="bg-gray-100 p-5 rounded-md shadow-sm mb-3">
                                <div class="col-span-6 sm:col-span-3 mb-4 pb-3 border-b-2 border-gray-200">
                                    <p class="font-bold">Poster Image</p>
                                </div>
    
                                <div class="flex justify-center mt-3" x-show="! imagePreview">
                                    <img class="text-center" src="{{ asset('images/placeholder.svg') }}"
                                        alt="preview image" style="max-height: 85px;" class="mt-2">
                                </div>
                                <div class="flex justify-center mt-3" x-show="imagePreview">
                                    <img class="text-center" :src="imagePreview"
                                        alt="preview image" style="max-height: 85px;" class="mt-2">
                                </div>
                                @error('post_image')
                                <p class="text-red-400 text-xs italic my-2 text-center">{{ $message }}</p>
                                @enderror
                                <div class="mt-3">
                                    <div class="flex w-full items-center justify-center bg-grey-lighter">
                                        <label class="w-64 flex flex-col items-center py-3 bg-gray-500 text-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-amber-900 hover:bg-yellow-400">
                                            <div class="flex gap-2">
                                                <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                                </svg>
                                                <span class="text-base leading-normal">Select a file</span>
                                            </div>
                                            <input id="image" type="file" class="hidden" name="post_image" accept="image/*" x-ref="image"
                                            x-on:change="
                                                    imageName = $refs.image.files[0].name;
                                                    const reader = new FileReader();
                                                    reader.onload = (e) => {
                                                        imagePreview = e.target.result;
                                                    };
                                                    reader.readAsDataURL($refs.image.files[0]);
                                            "/>
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="bg-gray-100 p-5 rounded-md shadow-sm mb-3">
                                <div class="col-span-6 sm:col-span-3 mb-4 pb-3 border-b-2 border-gray-200">
                                    <p class="font-bold">Category</p>
                                </div>
                                <div class="h-48 overflow-y-auto">
                                    @if (count($category) < 1)
                                    <p class="text-center">No categories yet</p>
                                    @endif
                                    @foreach ($category as $item)
                                    <div class="form-check">
                                        <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" 
                                            name="category[]" value="{{ $item->id }}" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label inline-block text-gray-800" for="flexCheckDefault">
                                          {{ $item->name }}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
