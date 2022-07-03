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
        $data['sect4'] = Car::select(
            'm_brand.name as bName',
            'm_model.name as mName',
            'm_trans.name as tName',
            'm_location.name as lName',
            'ctn_car.price',
            'ctn_car.priceDiscount',
            'ctn_car.year',
            )
            ->join('m_brand', 'ctn_car.id_brand', '=', 'm_brand.id')
            ->join('m-model', 'ctn_car.id_model', '=', 'm_model.id')
            ->join('m_trans', 'ctn_car.id_trans', '=', 'm_trans.id')
            ->join('m_location', 'ctn_car.id_location', '=', 'm_location.id')
            ->where('status', '=', $activeStat)->orderBy('created_time', 'desc')->limit(6)->get();
        // section 5
        $data['sect5'] = Car::select(
            'm_brand.name as bName',
            'm_model.name as mName',
            'm_trans.name as tName',
            'm_location.name as lName',
            'ctn_car.price',
            'ctn_car.priceDiscount',
            'ctn_car.year',
            )
            ->join('m_brand', 'ctn_car.id_brand', '=', 'm_brand.id')
            ->join('m-model', 'ctn_car.id_model', '=', 'm_model.id')
            ->join('m_trans', 'ctn_car.id_trans', '=', 'm_trans.id')
            ->join('m_location', 'ctn_car.id_location', '=', 'm_location.id')
            ->where('status', '=', $activeStat)->orderBy('created_time', 'desc')->limit(6)->get();
        // section 6 testimony
        $data['sect6'] = Car::select(
            'ctn_testimony.testimony as testimony',
            'm_brand.name as bName',
            'm_model.name as mName',
            'users.name as uName',
            )
            ->join('m_brand', 'ctn_car.id_brand', '=', 'm_brand.id')
            ->join('m-model', 'ctn_car.id_model', '=', 'm_model.id')
            ->join('users', 'ctn_testimony.id_user', '=', 'users.id')
            ->where('status', '=', $activeStat)->orderBy('created_time', 'desc')->limit(6)->get();

        return view('front.homepage', $data);
    }
}
