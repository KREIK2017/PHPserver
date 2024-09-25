<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getRecords()
    {
        $users = DB::table('users')->get();
        return view('users.index', compact('users')); 
    }

    public function edit($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('users.edit-user', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ];

        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->input('password'));
        }

        DB::table('users')->where('id', $id)->update($data);
        
        return redirect()->route('user.index')->with('success', 'User updated successfully!');
    }

    public function deleteRecord($id)
    {
        DB::table('users')->where('id', $id)->delete();
        
        return redirect()->route('user.index')->with('success', 'User deleted successfully!');
    }
    public function store(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        
        return redirect()->route('user.index')->with('success', 'User created successfully!');
    }
}
