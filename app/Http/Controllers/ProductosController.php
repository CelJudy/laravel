<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    public function select1(){
        $id="10";
        $model=Productos::find($id);
        var_dump($model->getAttributes());
    }

    public function select2(){
        $nombre="cartulina";
        $model=Productos::where(['nombre'=>$nombre,'precio'=>'3'])->get();
        foreach($model as $data){
            var_dump($data->getAttributes());
        }
        
    }

    public function selectAll(){
        $result=Productos::all();
        foreach($result as $data){
            var_dump($data);
        }
    }

    public function update(){
        $nombre='borrador';
        $model=Productos::where(['nombre'=>$nombre])
            ->update(
                ['stock' => '5', 'precio' => '5']
            );
    }

    public function delete(){
        $model=Productos::where('stock', '>', '5')->delete();
    }

    public function insert(){
        $nombre='borrador';
        $precio='3';
        $stock='12';

        $result=Productos::insert(
            ['nombre' => $nombre, 'precio' => $precio, 'stock' => $stock]
        );
        
    }
    
    public function RawQuery(){
        $seq = DB::select("SELECT nextval('serial') as seq;")->first();

        var_dump($seq);
        die();
        $id=date("y").$seq;
        
    }

    public function insertar(Request $request){
        var_dump($request->post());
        $result=Productos::insert(
            ['nombre' => $request->input_nombre, 
            'precio' => $request->input_precio, 
            'stock' => $request->input_stock]
        );

        //return \Redirect::to('/tickets/create')->withInput()->withErrors($validation);
    }
}
