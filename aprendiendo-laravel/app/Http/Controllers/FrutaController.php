<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FrutaController extends Controller
{
    public function index (){
        $frutas = DB::table('frutas')
        ->orderBy('id','desc')
        ->get();
        return view('fruta.index',[
            'frutas'=>$frutas
        ]);
    }

    public function detail($id){
        $fruta = DB::table('frutas')->where('id','=',$id)->first();

        return view('fruta.detail',[
            'fruta' => $fruta
        ]);
    }

    public function create(){
        return view('fruta.create');
    }

    public function save(Request $request){
        $fruta = DB::table('frutas')->insert(array(
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio'=> $request->input('precio'),
            'fecha' => date('Y-m-d')
        ));

        return redirect()->route('fruta.index')->with('status','Fruta creada correctamente');
    }

    public function delete($id){
        $fruta = DB::table('frutas')->where('id',$id)->delete();
        return redirect()->route('fruta.index')->with('status','Fruta borrado correctamente');
    }

    public function edit($id){
        //sacar el registro de la base de datos
        $fruta = DB::table('frutas')->where('id',$id)->first();

        //pasarle a la vista el objeto y rellenar el formulario
        return view('fruta.create',[
            'fruta' => $fruta
        ]);
    }

    public function update(Request $request){
        $id = $request->input('id');
        $fruta = DB::table('frutas')->where('id',$id)
                        ->update(array(
                            'nombre' => $request->input('nombre'),
                            'descripcion' => $request->input('descripcion'),
                            'precio' => $request->input('precio')
                        ));
        return redirect()->route('fruta.index')->with('status','Fruta actualizada correctamente');
    }
}
