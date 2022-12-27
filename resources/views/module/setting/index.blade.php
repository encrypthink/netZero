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
        <form action="{{ route('setting.store') }}" method="post">
            <div class="mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg p-7">
                    <div class="mb-7">
                        <h1 class="text-slate-900 font-extrabold text-4xl sm:text-xl lg:text-4xl">General Setting</h1>
                    </div>
    
                    <div class="col-span-6 sm:col-span-3 mb-4">
                        <label for="website_title" class="block text-sm font-bold text-gray-700">Website Title</label>
                        <input type="text" name="website_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="NetZero" value="{{$identity->name}}">
                        @error('website_title')
                        <p class="text-red-400 text-xs italic my-2">{{ $message }}</p>
                        @enderror
                    </div>
    
                    <div class="col-span-6 sm:col-span-3 mb-4">
                        <label for="website_url" class="block text-sm font-bold text-gray-700">Website Url</label>
                        <input type="text" name="website_url" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="https://netzero.id" value="{{$identity->site_url}}">
                        @error('website_url')
                        <p class="text-red-400 text-xs italic my-2">{{ $message }}</p>
                        @enderror
                    </div>
    
                    <div class="col-span-6 sm:col-span-3 mb-4">
                        <label for="administrator_email" class="block text-sm font-bold text-gray-700">Administrator E-Mail</label>
                        <input type="text" name="administrator_email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="admin@netzero.id" value="{{$identity->administrator_email}}">
                        @error('administrator_email')
                        <p class="text-red-400 text-xs italic my-2">{{ $message }}</p>
                        @enderror
                    </div>
    
                    <div>
                        <label for="description" class="block text-sm font-bold text-gray-700">Website Description</label>
                        <div class="mt-1">
                          <textarea id="description" name="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="net zero means cutting greenhouse gas emissions to as close to zero as possible, with any remaining emissions re-absorbed from the atmosphere, by oceans and forests for instance.">{{$identity->description}}</textarea>
                        </div>
                        @error('description')
                        <p class="text-red-400 text-xs italic my-2">{{ $message }}</p>
                        @enderror
                    </div>
    
                    @csrf
                    <div class="py-4 flex justify-end">
                        <button type="submit" class="py-2 px-3 text-amber-900 font-bold rounded-md bg-yellow-400">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>