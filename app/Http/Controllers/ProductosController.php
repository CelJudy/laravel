<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    public function select1(){
        $id="1";
        $model=Productos::find($id);
        var_dump($model->getAttributes());
    }

    public function select2(){
        $nombre="cartulinaaaa";
        $model=Productos::where(['nombre'=>$nombre,'precio'=>'3'])->get();
        foreach($model as $data){
            var_dump($data->getAttributes());
        }
        
    }
    
    public function funcion(){
        $seq = DB::select("SELECT nextval('serial') as seq;")->first();

        var_dump($seq);
        die();
        $id=date("y").$seq;
        

    }
}
