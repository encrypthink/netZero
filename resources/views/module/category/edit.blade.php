<x-app-layout>
    <form action="{{ route('category.update', $category->id) }}" method="post">
        @method('PATCH')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-7">
                    <div class="mb-8">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Edit Category') }}
                        </h2>
                    </div>
                    <div class="col-span-6 sm:col-span-3 mb-4">
                        <label for="category_name" class="block text-sm font-medium text-gray-700">Category Name</label>
                        <input type="text" name="category_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $category->name }}">
                        @error('category_name')
                        <p class="text-red-400 text-xs italic my-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <div class="mt-1">
                          <textarea id="description" name="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Description new Category">{{$category->description}}</textarea>
                        </div>
                    </div>
                    @csrf
                    <div class="py-4 flex justify-end">
                        <button type="submit" class="py-2 px-3 text-amber-900 font-bold rounded-md bg-yellow-400">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>