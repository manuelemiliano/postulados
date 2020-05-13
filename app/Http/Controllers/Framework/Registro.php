<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Helpme;

class Registro extends Controller
{

    public function registro(){	
	   return view('registro/registro');
   }

}
