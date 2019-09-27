<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Fruits extends Controller
{
    public function index()
    {
        $fructies = App\Fruits::zero();
        return view('news.show',compact('fructies'));
    }

    public function show()
    {
        $fruit = App\Fruits::find($id);
        return view('news.fruit',compact('fruit'));
    }
}
