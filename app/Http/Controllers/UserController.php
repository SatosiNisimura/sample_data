<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function add(Request $request)   //second
    {
        return view('user.add');
    }

    public function post(Request $request)   //fifth
    {
         $name = $request->input('name');
         $mail = $request->input('mail');
         return view('user.check', compact('name', 'mail'));    
    }

    public function create(Request $request)  //eighth
    {
        $this->validate($request, User::$rules);
        $user = new User();
        $form = $request->all();
        unset($form['_token']);
        $user->fill($form)->save();
        return redirect('/user');
    }

    public function index(Request $request)   //tenth
    {
        $items = User::all();
        return view('user.index', ['items' => $items]);
    }
}
