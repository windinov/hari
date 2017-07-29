<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orangtua;
use App\anak;

class MyController extends Controller
{
    //
    public function index()
    {
    	$a = "Windi Novianti";
    	return "Nama Saya Adalah <b>".$a."</b>";
    }

    public function tampilan()
    {
    	return view('about');
    }

    public function tampilanmodel()
    {
    	$ortu = orangtua::all();
    	$anak = anak::all();
    	return view('about2',compact('ortu','anak'));
    }

}
