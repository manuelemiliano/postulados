<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Helpme;
use App\Mail\IsssteMail;
use Illuminate\Support\Facades\Mail;

class Site extends Controller
{
  public function index()
  {
        return view('site/plantilla/index');
  }
  public function site()
  {
        return view('site/plantilla/index');
  }
  public function test()
  {
    
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'SenderUserName';
        $objDemo->receiver = 'ReceiverUserName';
 
        Mail::to("manuelaguado@gmail.com")->send(new IsssteMail($objDemo));
    
        return view('site/plantilla/test');
  }
}