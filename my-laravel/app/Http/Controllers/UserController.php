<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getRecords()
    {
        // Використання ORM Eloquent
        $users = User::all()->unique('email');
        return view('users.index', compact('users')); 
    }

    public function edit($id)
    {
        // Використання ORM Eloquent
        $user = User::findOrFail($id);
        return view('users.edit-user', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

        return redirect()->route('user.index')->with('success', 'User updated successfully!');
    }

    public function deleteRecord($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'User deleted successfully!');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('user.index')->with('success', 'User created successfully!');
    }
}
