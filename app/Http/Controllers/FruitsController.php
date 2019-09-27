<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class FruitsController extends Controller
{
    public function index()
    {
        $fructies = App\Fruits::zero();
        return view('news.show',compact('fructies'));
    }

    public function show($id)
    {
        $fruit = App\Fruits::find($id);
        return view('news.fruit',compact('fruit'));
    }
}
