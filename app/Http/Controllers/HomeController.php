<?php

namespace App\Http\Controllers;

use App\Models\danh_muc_dia_diem;
use Illuminate\Http\Request;
use App\Models\Banner;
class HomeController extends Controller
{
    public function index()
    {
        $slides=Banner::get();
        $categories=danh_muc_dia_diem::get();
        $data['slides']=$slides;
        $data['categories']=   $categories;
        return view('home.index',$data);
    }
}
