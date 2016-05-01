<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function createAdmin(Request $request){
        User::create([
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'email' => $request->email . '@nova.edu',
            'account_type' => 1,
        ]);
        return redirect("/");
    }

    public function destroy(User $user){
        $user->delete();
        return redirect("/");
    }
}
