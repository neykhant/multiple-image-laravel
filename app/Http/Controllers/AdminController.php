<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        // $this->middleware('isAdmin');
    }

    public function index(){
        $galleries =  Gallery::all();
        return view('admin.home', compact('galleries'));
    }

    public function index2(){
        // $galleries =  Gallery::all();
        return view('admin.welcome');
    }
}
