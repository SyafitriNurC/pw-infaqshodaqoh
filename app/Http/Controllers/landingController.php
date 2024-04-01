<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Models\Infaq;
// use App\Models\Tagihan;
// use App\Models\User;

class landingController extends Controller
{
    public function landing()
    {
        return view('landing');
    }

    public function login()
    {
        return view('login');
    }

//     public function admindashboard()
//     {
//         return view('dashboard');
//     }

    public function userdashboard()
    {

        return view('dashboard.userDashboard.template');
    }

//     public function unggah()
//     {
//         return view('dashboard.userdashboard.unggah');
//     }

//     public function tagihandash()
//     {
//         $tagihan = Tagihan::where('user_id', Auth::user()->id)->get();

//         return view('dashboard.userdashboard.tagihan', compact('tagihan'));
//     }

//     public function riwayat()
//     {
//         $infaq = Infaq::where('user_id', Auth::user()->id)->get();

//         return view('dashboard.userdashboard.riwayat', compact('infaq'));
//     }

}

