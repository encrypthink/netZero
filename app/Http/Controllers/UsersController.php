<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(25);
        return view('module.users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('module.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('users.index')->with('success', 'Success to add new User');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('module.users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->password !== null && $request->password_confirmation !== null) {
            $request->validate([
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);

            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('users.index')->with('success', 'Success to Update User');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Success to Delete User');
    }
}
