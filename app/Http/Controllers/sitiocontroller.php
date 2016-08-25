<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\sitio;
use App\publicaciones;
class sitiocontroller extends Controller
{
    /*public function pubxsitio($id)
    {
        $pubxsitio = sitio::find($id)->publicaciones()->where('estado_id',1)->get();
    	return dd($pubxsitio);
    }*/

    public function pubxsitio($id){
        $sitios = sitio::all();
        $hoy= date("Y-m-d");
        $pubgob = sitio::find($id)
                ->publicaciones()
                ->select('*')
                ->where('fecha_publicacion','<=',$hoy)
                ->where('fecha_caducidad','>=',$hoy)
                ->where('estado_id',3)
                ->latest()
                ->take(6)
                ->get();
        if(sizeof($pubgob)!=0){
            for ($i=0; $i < sizeof($pubgob) ; $i++) { 
                $imgfirst = \DB::table('multimedia')//obtenemos la primera imagen
                    ->select('nombre_multimedia','tipo')
                    ->where('id_publicacion',$pubgob[$i]->id)
                    ->first();
                //agregamos el atributo al objeto
                $pubgob[$i]->img=base64_encode(\Storage::disk('imagenes')->get($imgfirst->nombre_multimedia));
                $pubgob[$i]->tipo=$imgfirst->tipo;
                $pubgob[$i]->pagina = sitio::find($pubgob[$i]->sitio_id)->nombre_sitio;
            }
         }
         else{
            return 'no hay publicaciones';
         }
        return view('paginas.paginas',['sitios'=>$sitios,'pubgob'=>$pubgob]);
    }
}
