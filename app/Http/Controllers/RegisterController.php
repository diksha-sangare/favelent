<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    public function register()
    {
        return view('user.register');
    }
   
    public function createUser(Request $request)
    {

        $this->validate($request, [
                'name' => 'required|max:255',
                'bio' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users,email',
                'password' => 'required|max:7|min:3',
                'username' => 'required|max:255|min:3|unique:users,username',
        ]);

        $user = User::create([
            'name' => $request->name,
            'bio' => $request->bio,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'username' => $request->username
        ]);

        return redirect('/');
    }

}
