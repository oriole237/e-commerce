<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{
    public function index(Request $request){
        // dd($request->server('REMOTE_ADDR'));
        $ip ='92.168.100.102';
        $values = $currentUserInfo = Location::get($ip);
        dd($values->countryCode);
        return view('principal.index');
    }
}
