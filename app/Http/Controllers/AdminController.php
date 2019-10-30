<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use Auth;
Use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }
	
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function manageUsers()
    {
/* 		$id = Auth::id();
		$users = User::where('id', '!=', $id)->get(); */
		$users = User::all();
        return view('Admin.users', compact('users'));
    }
	
	public function editUsers($id)
    {
		$user = User::findOrFail($id);
        return view('Admin.edit', compact('user'));
    }
	
	public function updateUsers(Request $request)
    {
		$user = User::findOrFail($request->user_id);
		$user->name = $request->name;
		$user->role = $request->role;
		$user->save();
		
		return \Redirect::route('admin.manage.users')->with('message', 'User has been updated!');
    }
	
	public function deleteUsers($id)
    {
		$users = User::all();
        return view('Admin.users', compact('users'));
    }
}
