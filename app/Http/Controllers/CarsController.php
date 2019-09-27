<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;
class CarsController extends Controller
{
    public function form()
    {
        return view('cars');
    }

    public function insert(Request $request)
    {

        $cars = new Cars();
        $cars->model = $request->input('model');
        $cars->year = $request->input('year');
        $cars->probeg = $request->input('probeg');
        $cars->speed = $request->input('speed');
        $cars->save();
        $request->session()->flash('success',"Mashina muvaffaqiyatli qo'shildi");
        return redirect('/cars');

    }
}
