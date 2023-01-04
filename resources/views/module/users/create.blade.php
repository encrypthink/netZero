<x-app-layout>
    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('users.store') }}" method="post">
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg p-7">
                    <div class="grid grid-cols-2 mb-4">
                        <div class="mb-7">
                            <h1 class="text-slate-900 font-extrabold text-4xl sm:text-xl lg:text-4xl">Create New User</h1>
                        </div>
    
                        <div class="col-span-6 sm:col-span-3 mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                            <input type="text" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            @error('name')
                            <p class="text-red-400 text-xs italic my-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3 mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">E-Mail</label>
                            <input type="text" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            @error('email')
                            <p class="text-red-400 text-xs italic my-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3 mb-4">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <input type="password" name="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            @error('password')
                            <p class="text-red-400 text-xs italic my-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3 mb-4">
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Password Confirmation</label>
                            <input type="password" name="password_confirmation" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            @error('password_confirmation')
                            <p class="text-red-400 text-xs italic my-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    @csrf
                    <div class="flex justify-end">
                        <button type="submit" class="py-2 px-3 text-amber-900 font-bold rounded-md bg-yellow-400">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>