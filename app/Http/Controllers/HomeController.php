<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['previousWork']=Work::all();
        return view('home',$data);
    }

    public function about()
    {
return view('about');
    }
}
