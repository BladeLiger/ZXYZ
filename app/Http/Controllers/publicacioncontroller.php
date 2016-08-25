<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Carbon\Carbon;
use App\publicaciones;
use App\multimedia;
use App\categoria;
use App\sitio;
class publicacioncontroller extends Controller
{
	use recursoscontroller; // definimos que utilizaremos el controlador condificarcontroller
    public function getpublicacion(){
    	$categorias = categoria::all();//obtenemos todas las categorias

        $sitios =   sitio::all();//obtenemos todas las stios

        $fecha_inicio = date("Y-m-d");//enviamos fecha  actual servidor de inicio de gestion
		$fecha_fin = date("Y-12-31");//enviamos fecha de fin de año
    	return view('publicacion.formpublicaciones',['sitios'=>$sitios,'categorias'=>$categorias,'fecha_inicio'=>$fecha_inicio,'fecha_fin'=>$fecha_fin]);
    }

    public function postimgs(Request $request){
       
    	$p = new publicaciones;
    	$p->titulo = $request->input('titulo');
    	$p->contenido = $request->input('contenido');
    	$p->fecha_publicacion =$request->input('fecha_inicio');
    	$p->fecha_caducidad= $request->input('fecha_fin');
    	$p->id_tipo=$request->input('categoria');
    	$p->id_usuario=\Auth::user()->id;
    	$p->save();//hasta aqui guardamos en la tabla publicaciones

    	 //guardamos relaciones de muchos a muchos con la tabla sitios
    	for ($i=0; $i < sizeof($request->sitios); $i++) {
    		$p->sitios()->attach($request->sitios[$i]);
    	}
    	//guardamos relacion uno a muchos publiacion -> multimedia(imagenes)
        $Ult_publicacion= publicaciones::all();//obtenemos las publicaciones
        //return dd($Ult_publicacion->last()->id);
        //
    	//return "hola";
        for ($i=0; $i < sizeof($request->file) ; $i++) { 
    		//obtenemos el campo file definido en el formulario
	       $file = $request->file[$i];
	       //cambiamos el nombre de la imagen para tener un registro unico
	 	   $nombre = Carbon::now()->timestamp.''.$this->nombrealeatorio().'.'. $file->getClientOriginalExtension();
	       //indicamos que queremos guardar un nuevo archivo en el disco local imagenes
	       \Storage::disk('imagenes')->put($nombre,  \File::get($file));
           $m = new multimedia;
           $m->nombre_multimedia = $nombre;
           $m->tipo='imagen';
           $m->id_publicacion=$Ult_publicacion->last()->id;
           $m->save();
    	}

        if($request->input('videos') == "Yes")
        {
            $videos = $request->input('video');
            //return ($videos);
            foreach ($videos as $video) 
            {
                $url = $video;
                $m = new multimedia;
                $m->nombre_multimedia = $url;
                $m->tipo='video';
                $m->id_publicacion=$Ult_publicacion->last()->id;
                $m->save();
            }
        }

    	return 'Registro Existoso';

    }

    public function controlpaginas($id){
        $pagina=$id;
        $hoy= date("Y-m-d");
        $pubxsitio = sitio::find($id)
                    ->publicaciones()
                    ->select('*')
                    ->where('fecha_publicacion','<=',$hoy)//publicaciones en rango para ser publicadass
                    ->where('fecha_caducidad','>=',$hoy)
                    ->latest()
                    ->get();//obtenemos todas las publicaciones referente al sitio
        //buscamos sus autores de cada publicacion
        for ($i=0; $i < sizeof($pubxsitio) ; $i++) { 
            $autor = \DB::table('users')
                ->select('*')
                ->where('id',$pubxsitio[$i]->id_usuario)
                ->first();
            //agregamos el atributo al objeto
            $pubxsitio[$i]->usuario=$autor->nombre.' '.$autor->apellidoP;
            $pubxsitio[$i]->ci=$autor->ci;
        }
        //categoria
        for ($i=0; $i < sizeof($pubxsitio) ; $i++) { 
            $categoria = categoria::find($pubxsitio[$i]->id_tipo);
            //agregamos el atributo al objeto
            $pubxsitio[$i]->categoria=$categoria->categoria;
        }
        return view('control.controlpaginas',['pubxsitio'=>$pubxsitio,'pagina'=>$pagina]);
    }

    public function estadopublicacion($id,$id_pagina){
        $estado_actual = \DB::table('publicaciones_sitio')
            ->select('*')
            ->where('publicaciones_id', $id)
            ->where('sitio_id', $id_pagina)
            ->get();
        if($estado_actual[0]->estado_id === 3){
            \DB::table('publicaciones_sitio')
                ->where('publicaciones_id', $id)
                ->where('sitio_id', $id_pagina)
                ->update(['estado_id' => 4]);
        }
        else{
            \DB::table('publicaciones_sitio')
                ->where('publicaciones_id', $id)
                ->where('sitio_id', $id_pagina)
                ->update(['estado_id' => 3]);
        }
        return redirect()->route('control_pagina', [$id_pagina]);
    }
}
