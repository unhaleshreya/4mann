<?php

namespace App\Http\Controllers;
use App\Models\Testimony;

use Illuminate\Http\Request;

class TestimonyController extends Controller
{
    //
    public function index()
    {
        $testimonies = Testimony::all();
        return view("admin.testimony.index",compact("testimonies"));
    }
}
