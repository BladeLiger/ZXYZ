<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\sitio;
use App\publicaciones;
class sitiocontroller extends Controller
{   
    use recursoscontroller;
    /*public function pubxsitio($id)
    {
        $pubxsitio = sitio::find($id)->publicaciones()->where('estado_id',1)->get();
    	return dd($pubxsitio);
    }*/

    public function pubxsitio($id){//encriptado
        $id=$this->desencriptar($id);
        $sitios = sitio::all()->toArray();
        for ($i=0; $i < sizeof($sitios) ; $i++) { 
            $sitios[$i]['id']=$this->encriptar($sitios[$i]['id']);
        }
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
        $pubgob = $pubgob->toArray();
        for ($i=0; $i < sizeof($pubgob) ; $i++) { 
            $pubgob[$i]['id']=$this->encriptar($pubgob[$i]['id']);
        }
        return view('paginas.paginas',['sitios'=>$sitios,'pubgob'=>$pubgob]);
    }


    public function leerMas($id){//encriptado
        $id = $this->desencriptar($id);
        $sitios = sitio::all()->toArray();
        for ($i=0; $i < sizeof($sitios) ; $i++) { 
            $sitios[$i]['id']=$this->encriptar($sitios[$i]['id']);
        }

        $pub = publicaciones::find($id);
        $album = array();

        if(sizeof($pub)!=0){
            $imgs = \DB::table('multimedia')//obtenemos todo el album
                    ->select('nombre_multimedia','tipo')
                    ->where('id_publicacion',$pub->id)
                    ->get();

            for ($i=0; $i < sizeof($imgs) ; $i++) { 
                if ($imgs[$i]->tipo==='imagen') {
                    $album[$i]=base64_encode(\Storage::disk('imagenes')->get($imgs[$i]->nombre_multimedia));
                }
                else{
                    $album[$i]=$imgs[$i]->nombre_multimedia;
                }
            }
         }
        $pub->album_multimedia=$album;
        $pub = $pub->toArray();
        //for ($i=0; $i <sizeof($pub) ; $i++) { 
            $pub['id'] = $this->encriptar($pub['id']);
            $pub['id_tipo'] = $this->encriptar($pub['id_tipo']);
            $pub['id_usuario'] = $this->encriptar($pub['id_usuario']);
       // }
        //return dd($pub);
        return view('publicacion.ver_publicaciones',['sitios'=>$sitios,'pub'=>$pub]);
    }

    //encriptar y desencritpar//
    public function getimgs($id){
        return $this->encriptar($id);
    }
    public function getimgs2($id){
        return $this->desencriptar($id);
    }
}
