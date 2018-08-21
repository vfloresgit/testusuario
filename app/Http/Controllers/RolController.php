<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles=Rol::all()->where('estado','=','1');
        return view('rol.index',['rol'=>$roles]);
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view("rol.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    if($request->ajax()){              
        Rol::create(
    [
           'nombre'=>$request->txtnombre,
           'descripcion'=>$request->txtdescripcion
    ]
    );
        /*return response()->json([
        
        "mensaje"=>$request->all()

        ]);*/
    }
    
    return redirect('rol')->with('success','ROL REGISTRADO CORRECTAMENTE');
        /*$rol=Rol::create(
        [
           'nombre'=>$request->txtnombre,
           'descripcion'=>$request->txtdescripcion
        ]
        );
        return redirect('rol')->with('success','ROL REGISTRADO CORRECTAMENTE');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
     $rol = Rol::findOrFail($id);  
     /*$usuario=Usuario::select('password')->where('id','=',$id)->get();
     $clave=decrypt($usuario);              
     dd($clave);*/
     return view('rol.edit',compact("rol"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
      $this->validate($request,
        [
        'txtnombre'=>'required',
        'txtdescripcion'=>'required',
        ]
      );
     $rol=Rol::findOrFail($id);
     $rol->nombre=$request->txtnombre;
     $rol->descripcion =$request->txtdescripcion;
                   
  
     $rol->save();
     return redirect('rol')->with('success','ROL EDITADO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
      if ($request->ajax()) {
        

        $rol=Rol::findOrFail($request->textoeliminar);
       $rol->estado="0";
       $rol->save();
      }  

       
        return redirect('rol')->with('success','ROL ELIMINADO');
    }
}
