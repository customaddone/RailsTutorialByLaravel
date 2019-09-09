<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', [ 'users' => $users ]);
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', [ 'user' => $user ]);
    }

    public function create()
    {
        return view('users.new');
    }

    public function store(Request $request)
    {
        $user = new User;
        $form = $request->all();
        unset($form['_token']);
        $user->fill($form)->save();
        return view('users.show', [ 'user' => $user ]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', [ 'user' => $user ]);
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $user->fill($form)->save();
        return view('users.show', [ 'user' => $user ]);
    }

    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return redirect('/users');
    }
}
