<x-app-layout>
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
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg p-7">
               <div class="grid grid-cols-2 mb-4">
                <div class="mb-7">
                    <h1 class="text-slate-900 font-extrabold text-4xl sm:text-xl lg:text-4xl dark:text-white">Post</h1>
                </div>
                <div>
                    <div class="flex justify-end">
                        <a href="{{ route('post.create') }}" class="py-2 px-3 text-amber-900 font-bold rounded-md bg-yellow-400">New Post</a>
                    </div>
                </div>
               </div>
                <div class="w-full bg-slate-100 rounded-md">
                    <table class="w-full whitespace-nowrap">
                        <thead class="font-bold border-b-2 border-yellow-400">
                            <tr>
                                <td class="px-5 py-3">Title</td>
                                <td class="px-5 py-3">Author</td>
                                <td class="px-5 py-3">Thumbnail</td>
                                <td class="px-5 py-3">Date Created</td>
                                <td class="px-5 py-3">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($post) < 1)
                                <tr>
                                    <td colspan="5" class="p-3 text-center text-slate-500">Not yet record</td>
                                </tr>
                            @endif
                            @foreach ($post as $item)
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="p-2">
                        {{ $post->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>    