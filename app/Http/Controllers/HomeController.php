<?php

namespace App\Http\Controllers;

use App\Models\Aduan;
use App\Models\Pegawai;
use App\Models\Kustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('superadmin')){
            $aduan = Aduan::get()->count();
            $pegawai = Pegawai::get()->count();
            $customer = Kustomer::get()->count();
            return view('admin.home',compact('aduan','pegawai','customer'));
        }else{
            $kustomer = Auth::user()->kustomer;
            $countAduan = Aduan::where('kustomer_id', $kustomer->id)->get();
            return view('user.home',compact('kustomer','countAduan'));
        }
    }
}
