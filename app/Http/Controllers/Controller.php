<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function funcion(){

        echo "Hola mundo";
    }

    public function funcion2(){

        $nombre="Celeste";

        return view('vista2',['variable'=>$nombre]);
    }

    public function funcion3($id){
        
        echo "El id --".$id."--";
    }
}
