<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\computer;

class PagesController extends Controller
{
  public function index(){
    return view ('computers/index');
  }
  public function index1(){
    return view ('about');
  }
  public function index2(){
    return view ('contact');
  }
}
