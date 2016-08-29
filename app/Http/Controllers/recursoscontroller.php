<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

trait recursoscontroller
{
    /*nbjbvmdsjbgadklanhvfdnlfñmagbsjsjskslls is : 4d9ee7f26f953c44e8d7b9e90b58b260*/
    public function encriptar($id)//encriptar url
    {
        $key='4d9ee7f26f953c44e8d7b9e90b58b260';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
        $encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $id, MCRYPT_MODE_CBC, md5(md5($key))));
        $encrypted = str_replace(array('+', '/'), array('-', '_'),$encrypted);//sustituimos los caracteres que nos den problemas con las rutas por caracteres que no esten en base64_encode
        return $encrypted; //Devuelve el string encriptado
    }

    public function desencriptar($idencriptado)//desencrecriptae url
    {
        $key='4d9ee7f26f953c44e8d7b9e90b58b260';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
        $idencriptado = str_replace(array('-', '_'), array('+', '/'), $idencriptado);//sustituimos nuevamente los caracteres para poder hacer la decodificacion
        $decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($idencriptado), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
        return $decrypted;  //Devuelve el string desencriptado
    }

    public function nombrealeatorio(){//generar nombres aleatorios
      $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"; //posibles caracteres a usar
      $numerodeletras=10; //numero de letras para generar el texto
      $cadena = ""; //variable para almacenar la cadena generada
      for($i=0;$i<$numerodeletras;$i++){
        $cadena .= substr($caracteres,rand(0,strlen($caracteres)),1); /*Extraemos 1 caracter de los caracteres
        entre el rango 0 a Numero de letras que tiene la cadena */
      }
      return $cadena;
    }

   /* function gestion_rango($start_date, $end_date, $todays_date)
	{

	  $start_timestamp = strtotime($start_date);
	  $end_timestamp = strtotime($end_date);
	  $today_timestamp = strtotime($todays_date);

	  return (($today_timestamp >= $start_timestamp) && ($today_timestamp <= $end_timestamp));

	}

  function gestion_rango2($start_date_1, $end_date_1, $start_date_2, $end_date_2)
	{
	    $start_timestamp_1 = strtotime($start_date_1);
	    $end_timestamp_1 = strtotime($end_date_1);
	    $start_timestamp_2 = strtotime($start_date_2);
	    $end_timestamp_2 = strtotime($end_date_2);

	    return (($start_timestamp_1 <= $end_timestamp_2) && ($end_timestamp_1 >= $start_timestamp_2));
	}*/
}
