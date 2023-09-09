<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class ProductosController extends Controller
{
    public function select1(){
        $id="20";
        $model=Productos::find($id);
        var_dump($producto);
    }

    public function select2(){
        $nombre="cartulinas";
        $model=Productos::where(['nombre'=>$nombre,'precio'=>'3'])->get();
        var_dump($producto);
    }

    public function insert(){
        $model=new Productos();
        $model->id_producto="25";
        $model->nombre="plumas";
        $model->precio="5";
        $model->stock="15";
    }

    public function update(){
        $id="20";
        $model=Productos::find($id);
        // o
        $nombre="cartulinas";
        $model=Productos::where(['nombre'=>$nombre,'precio'=>'3'])->get();

        $model->stock="5";
        $model->save();
    }

    public function delete(){
        
        $id="20";
        $model=Productos::find($id);
        // o
        $nombre="cartulinas";
        $model=Productos::where(['nombre'=>$nombre,'precio'=>'3'])->get();

        $model->delete();

        //o 
        $model=Productos::find($id)->delete();
        $model=Productos::where(['nombre'=>$nombre,'precio'=>'3'])->delete();
    }
}
