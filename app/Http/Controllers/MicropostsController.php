<?php

namespace App\Http\Controllers;

use App\Micropost;
use App\Http\Requests\MicropostsRequest;
use Illuminate\Http\Request;

class MicropostsController extends Controller
{
    public function index()
    {
        $microposts = Micropost::all();
        return view('microposts.index', [ 'microposts' => $microposts ]);
    }

    public function show($id)
    {
        $micropost = Micropost::find($id);
        return view('microposts.show', [ 'micropost' => $micropost ]);
    }

    public function create()
    {
        return view('microposts.new');
    }

    public function store(MicropostsRequest $request)
    {
        $micropost = new Micropost;
        $form = $request->all();
        unset($form['_token']);
        $micropost->fill($form)->save();
        return view('microposts.show', [ 'micropost' => $micropost ]);
    }

    public function edit($id)
    {
        $micropost = Micropost::find($id);
        return view('microposts.edit', [ 'micropost' => $micropost ]);
    }

    public function update(MicropostsRequest $request)
    {
        $micropost = Micropost::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $micropost->fill($form)->save();
        return view('microposts.show', [ 'micropost' => $micropost ]);
    }

    public function destroy($id)
    {
        $micropost = Micropost::find($id)->delete();
        return redirect('/microposts');
    }
}
