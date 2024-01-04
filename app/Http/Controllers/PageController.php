<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('users.index');
    }

    public function create()
    {
        return view('users.create');
    }

    public function update()
    {
        return view('users.update');
    }

    public function delete()
    {
        return view('users.delete');
    }
}
