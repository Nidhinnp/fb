<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Facades\Storage;
use Illuminate\Support\Str;

class postcontroller extends Controller
{
    public function fn_new(){
        return view('file');
      }
}
