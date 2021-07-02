<?php

namespace App\Http\Controllers;

use App\Models\Kustomer;
use Illuminate\Http\Request;

class KustomerController extends Controller
{
    public function index()
    {
        $data = Kustomer::get();
        return view('admin.kustomer.index',compact('data'));
    }

    public function destroy($id)
    {
        Kustomer::find($id)->delete();
        toastr()->success('berhasil Di hapus');
        return back();
    }
}
