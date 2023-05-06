<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return inertia('Index/index');
    }
    public function show(){
        return inertia('Index/show');
    }
}
