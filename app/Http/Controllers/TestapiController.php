<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use App\Testapi;
class TestapiController extends Controller
{
    public function getAll()
    {
        $tests = Testapi::all();
        return $tests;
    }

    public function add(Request $request)
    {
        $test = Testapi::create($request->all());
        return $test;
    }

    public function get($id)
    {
        $test = Testapi::find($id);

         return $test;
    }

    public function edit($id, Request $request)
    {
        $test = $this->get($id);
        $test->fill($request->all())->save();
        return $test;
    }

    public function delete($id)
    {
        $test = $this->get($id);
        $test->delete();
        return $test;
    }
}
