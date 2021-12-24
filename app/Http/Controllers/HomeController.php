<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home', ['lists' => TodoList::orderBy('id', 'desc')->get()]);
    }
}
