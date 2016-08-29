<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\sitio;
class HomeController extends Controller
{
    use recursoscontroller;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sitios = sitio::all()->toArray();
        //foreach ($sitios as $key) {
          //  $key->id=$this->encriptar($key->id);
        //}
        for ($i=0; $i < sizeof($sitios) ; $i++) { 
            $sitios[$i]['id']=$this->encriptar($sitios[$i]['id']);
        }
       // $sitios->keyBy('id');
        //return var_dump($sitios);
        return view('home',['sitios'=>$sitios]);
    }

    
}
