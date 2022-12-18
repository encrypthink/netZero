<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Category') }}
        </h2>
    </x-slot>

    <form action="{{ route('category.store') }}" method="post">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-7">
                    <div class="col-span-6 sm:col-span-3 mb-4">
                        <label for="first-name" class="block text-sm font-medium text-gray-700">Category Name</label>
                        <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="about" class="block text-sm font-medium text-gray-700">Description</label>
                        <div class="mt-1">
                          <textarea id="about" name="about" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="you@example.com"></textarea>
                        </div>
                        {{-- <p class="mt-2 text-sm text-gray-500">Brief description for your profile. URLs are hyperlinked.</p> --}}
                    </div>
                    <div class="py-4 flex justify-end">
                        <button type="submit" class="bg-blue-900 text-white py-2 px-3 rounded-md">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>