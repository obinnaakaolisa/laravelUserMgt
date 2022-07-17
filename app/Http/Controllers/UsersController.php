<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //returns all users from database
    public function getUsers()
    {
        $users = User::all();

        return view('users', ['users' => $users]);
    }

    //returns view for adding new users
    public function addUser() 
    {
        return view('createUser');
    }

    
    //adds a new user to the database
    public function createUser() 
    {

        request()->validate([
            'name'=> 'required',
            'email'=> 'required',
            'phone'=> 'required'
        ]);

        User::create([
           'name' => request('name'),
           'email' => request('email'),
           'phone' => request('phone')
        ]);

        return redirect('users');
    }

    //returns view for updating a user's info
    public function editUser(User $user) 
    {
        return view('editUser', ['user' => $user]);
    }

    //updates a user's info
    public function updateUser(User $user) 
    {

        request()->validate([
            'name'=> 'required',
            'email'=> 'required',
            'phone'=> 'required'
        ]);

        $user->update([
           'name' => request('name'),
           'email' => request('email'),
           'phone' => request('phone')
        ]);

        return redirect('/users');
    }

    //returns view for deleting a user
    public function deleteUser(User $user) 
    {
        
        $user->delete([
            'id' => request('id')
         ]);

        return redirect('/users');
    }
}
