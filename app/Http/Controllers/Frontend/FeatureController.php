<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function feature(){
        return view("frontend.feature");
    }
}
