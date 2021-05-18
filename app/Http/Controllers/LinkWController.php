<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;

class LinkWController extends Controller
{
    public function index()
    {
        $link = Link::all();

        return view('welcome',[
            'link' => $link
        ]);
    }

    public function add()
    {
        return view('add');
    }

    public function addAction(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'link' => 'required'
        ]);
        $add = new Link;
        $add->title = $request->title;
        $add->link = $request->link;
        $add->image = Link::images();
        $add->save();

        return redirect('/');
    }

    public function remove($id)
    {
        $remove = Link::find($id);
        if ($remove) {
            $remove->delete();
        }
        return redirect('/');
    }
}
