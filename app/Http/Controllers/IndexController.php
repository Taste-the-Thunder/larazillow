<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index(){
        return inertia('Index/index',[
            'message' => 'hello from Laravel!'
        ]);
    }
    public function show(){
        return inertia('Index/show');
    }
}
