<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('admin/dashboard');

    }

    public function create(Request $request)
    {   
     $user = new User();
            $user->name = $request['name'];
            $user->Type = $request['type'];   
            $user->email = $request['email'];   
            $user->password = Hash::make($request['password']);   
            $user->save();  


      return back();

    }

    public function store(Request $request)
    {
        
        
    }

    public function show(User $user)
    {

        
    }

    public function edit(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
    	$user->delete();
        return redirect()->route('myUsers.users');
    }

    public function updateStatus(User $user, $status)
    {
        
    }
    public function users(){
    	$users = User::latest()->get();
    	return view('admin/createUser', compact('users'));
    }
}
