<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vivienda;

class casa extends Controller
{
   public function index()
   {
   	$var['casas'] = Vivienda::orderBy('id', 'DESC')->get();
   	return view('vivienda',$var);
   }

   public function agregar()
   {
   		return view('registro');
   }
    public function editar()
   {
      return view('actualizar');
   }

   public function store(Request $request)
   {
   	//$datos = $request->all();
      Vivienda::create($request->all());
      /*DB::table('tb_vivienda')->insert(
         ['c_habit'=>$datos,
           'c_baños'=>$datos,
           'colonia'=>$datos,
           'precio'=>$datos,
           'tamanio'=>$datos,
           'minicipio'=>$datos,
           'departamento'=>$datos,
           'categoria'=>$datos,
           'negociable'=>$datos,
           'estado'=>$datos,
           'created_at'=>$datos,
           'update_at'=>$datos,           
         ]
      );*/
      return redirect('a')->with('success','Registro creado satisfactoriamente');
      //echo "Inserted</br>";
      //echo "<a href='/a'>back</a>";
   }

       public function update(Request $request, Vivienda $vivienda)

    {

       $hola=request()->validate([
        'c_habit'=>'required',
         'c_baños'=>'required',
          'colonia'=>'required',
          'precio'=>'required',
          'tamanio'=>'required',
          'municipio'=>'required',
          'departamento'=>'required',
          'categoria'=>'required',
          'negociable'=>'required',
          'estado'=>'required',


      ]);

        $vivienda->update($hola);
        return redirect()->route('a');

        //return redirect('a')->with('success','Product updated successfully');

    }

  public function edit($id)
    {
       $vivienda=Vivienda::where('id',$id)->firstOrFail();
        if(is_null($vivienda))
        {

         App::abort(404);
        }else{
           return view('actualizar',compact('vivienda'));
        }
    }

     public function destroy($id)
    {
       
      $var = Vivienda::findOrFail($id);
        $var->delete();
        return redirect('a'); 
    }

}
