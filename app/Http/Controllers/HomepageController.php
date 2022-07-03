<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Banner;
use App\Models\Car;
use App\Models\Testimony;

class HomepageController extends Controller
{
    public function index() {
        $activeStat = 1;

        // section 1 banner data
        $data['banner'] = Banner::where('status', '=', $activeStat)->orderBy('created_time', 'desc')->get();
        // section 4
        $data['sect4'] = Car::where('status', '=', $activeStat)->orderBy('created_time', 'desc')->limit(6)->get();
        // section 5
        $data['sect5'] = Car::where('status', '=', $activeStat)->orderBy('created_time', 'desc')->get();
        // section 6 testimony
        $data['sect6'] = Testimony::where('status', '=', $activeStat)->orderBy('created_time', 'desc')->get();

        return view('front.homepage', $data);
    }
}
