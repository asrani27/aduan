<?php

namespace App\Http\Controllers;

use App\Models\Aduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('superadmin')){
            return view('admin.home');
        }else{
            $kustomer = Auth::user()->kustomer;
            $countAduan = Aduan::where('kustomer_id', $kustomer->id)->get();
            return view('user.home',compact('kustomer','countAduan'));
        }
    }
}
