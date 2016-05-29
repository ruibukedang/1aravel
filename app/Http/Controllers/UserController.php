<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    public function show(Request $request)
    {
        $this->validate($request, [
            'nickname' => 'alpha_dash|unique:users|max:30',
        ]);
        $user = User::where('nickname', $request->nickname)->firstOrFail();
        return view('user.show', ['user' => $user]);
    }
}
