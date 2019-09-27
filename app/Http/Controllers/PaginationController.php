<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PaginationController extends Controller
{
    public function users()
    {
        $users = User::paginate(10);
        return view('pagination',compact('users'));
    }
}
