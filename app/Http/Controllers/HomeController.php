<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index()
    {
        $data['previousWork']=Work::all();
        $data['clients']=Clients::all();
        return view('home',$data);
    }

    public function about()
    {
        return view('about');
    }

    public function service()
    {
        return view('service');
    }

    public function language()
    {

            $newLocale = App::getLocale() === 'en' ? 'ar' : 'en';
            session(['locale' => $newLocale]);
            return redirect()->back();
    }
}
