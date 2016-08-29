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

    public function welcome(){
        $sitios = sitio::all()->toArray();
        for ($i=0; $i < sizeof($sitios) ; $i++) { 
            $sitios[$i]['id']=$this->encriptar($sitios[$i]['id']);
        }

        $hoy= date("Y-m-d");
        $pubgob = sitio::find(1)
                ->publicaciones()
                ->where('fecha_publicacion','<=',$hoy)
                ->where('fecha_caducidad','>=',$hoy)
                ->where('estado_id',3)
                ->latest()
                ->take(6)
                ->get();
        for ($i=0; $i < sizeof($pubgob) ; $i++) { 
            $imgfirst = \DB::table('multimedia')//obtenemos la primera imagen
                ->select('nombre_multimedia','tipo')
                ->where('id_publicacion',$pubgob[$i]->id)
                ->first();
            if (\Storage::disk('imagenes')->exists($imgfirst->nombre_multimedia)===false) {
                return "error no se encuentra la imagen ".$imgfirst->nombre_multimedia;
            }
            //agregamos el atributo al objeto
            $pubgob[$i]->img=base64_encode(\Storage::disk('imagenes')->get($imgfirst->nombre_multimedia));
            $pubgob[$i]->tipo=$imgfirst->tipo;
        }

        $pubgob = $pubgob->toArray();
        for ($i=0; $i < sizeof($pubgob) ; $i++) { 
            $pubgob[$i]['id']=$this->encriptar($pubgob[$i]['id']);
        }
        return view('welcome',['sitios'=>$sitios,'pubgob'=>$pubgob]);
    }
}
