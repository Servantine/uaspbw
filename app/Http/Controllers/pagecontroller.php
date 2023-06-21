<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_0465;
use Illuminate\Support\Facades\DB;

class pagecontroller extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function form(){
        return view('x');
    }

    public function simpanuser(Request $request){
        $speciall = implode(',',$request->special);
        return view('y',['speciall' => $speciall]);
    }

    public function tampil(){
        $hasil = DB::table('tbl_0465')->orderBy('tanggal_artikel','desc')->paginate(5);
        return view('tampil', ['hasil' => $hasil]);

    }
    public function sapaan() {
        date_default_timezone_set("Asia/Bangkok");
        $date = date('H:i');

        if ($date >= 19 && $date < 3) 
        {
            $greet = "Selamat Malam User";
        } 
        elseif ($date >= 3 && $date < 10)
        {
            $greet = "Selamat Pagi User";
        }
        elseif ($date >= 10 && $date < 15)
        {
            $greet = "Selamat Siang User";
        }
        elseif ($date >= "15:00" && $date < "16:27")
        {
            $greet = "Selamat Sore User";
        }
        else 
        {
            $greet = "Selamat Petang User";
        }
        
        return view('welcome', ['greet' => $greet]);
    }
}
