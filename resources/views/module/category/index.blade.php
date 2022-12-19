<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg p-7">
                <div class="grid grid-cols-2 mb-7">
                    <div></div>
                    <div class="flex justify-end">
                        <a href="{{ route('category.create') }}" class="py-2 px-3 text-amber-900 font-bold rounded-md bg-yellow-400">New Category</a>
                    </div>
                </div>
                <div class="w-full bg-slate-100 rounded-md">
                    <table class="w-full whitespace-nowrap">
                        <thead class="font-bold border-b-2 border-yellow-400">
                            <tr>
                                <td class="px-5 py-3">Category</td>
                                <td class="px-5 py-3">Description</td>
                                <td class="px-5 py-3">Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr tabindex="0" class="focus:outline-none h-16 border-gray-100 hover:bg-yellow-100">
                                <td class="pl-5">
                                    Marketing Keynote Presentation
                                </td>
                                <td class="pl-4">
                                    lalala
                                </td>
                                <td>
                                    <button class="focus:ring-2 rounded-md focus:outline-none" onclick="dropdownFunction(this)" role="button" aria-label="option">
                                        <svg class="dropbtn" onclick="dropdownFunction(this)" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M4.16667 10.8332C4.62691 10.8332 5 10.4601 5 9.99984C5 9.5396 4.62691 9.1665 4.16667 9.1665C3.70643 9.1665 3.33334 9.5396 3.33334 9.99984C3.33334 10.4601 3.70643 10.8332 4.16667 10.8332Z" stroke="#9CA3AF" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10 10.8332C10.4602 10.8332 10.8333 10.4601 10.8333 9.99984C10.8333 9.5396 10.4602 9.1665 10 9.1665C9.53976 9.1665 9.16666 9.5396 9.16666 9.99984C9.16666 10.4601 9.53976 10.8332 10 10.8332Z" stroke="#9CA3AF" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M15.8333 10.8332C16.2936 10.8332 16.6667 10.4601 16.6667 9.99984C16.6667 9.5396 16.2936 9.1665 15.8333 9.1665C15.3731 9.1665 15 9.5396 15 9.99984C15 10.4601 15.3731 10.8332 15.8333 10.8332Z" stroke="#9CA3AF" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
