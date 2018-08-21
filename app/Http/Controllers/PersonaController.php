<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Persona;
use DB;
class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // return session('victor');exit;
      $variablesession=session('idepersona');

      $empresa=Persona::select('empresa_id')->where('id','=',$variablesession)->get();
      foreach($empresa as $resultado){
        $empresaID=$resultado->empresa_id;
      }
      $personas=Persona::all()->where('estado','=','1')->where('empresa_id','=',$empresaID);      
      //dd($usuarios);
      $profiles=DB::table('profiles')->select('color','path')->where('empresa_id','=',$empresaID)->get();

      foreach ($profiles as $resultado2) {
           $ProfilePath=$resultado2->path;
           $ProfileColor=$resultado2->color;
      }      
      return view('persona.index',compact("personas","ProfilePath","ProfileColor"));
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      //$fechaActual=date('Y-m-d');
      //$Colum_rol=DB::table('roles')->select('id','descripcion')->get();    
      return view("persona.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
     if($request->ajax()){

      $variablesession=session('idepersona');
      $empresa=Persona::select('empresa_id')->where('id','=',$variablesession)->get();
      foreach($empresa as $resultado){
      $empresaID=$resultado->empresa_id;
      }
      Persona::create(
        [
           'nombre'=>$request->txtnombre,
           'apellidopaterno'=>$request->txtpaterno,
           'apellidomaterno'=>$request->txtmaterno,
           'email'=>$request->txtemail,
           'dni'=>$request->textdni,
           'distrito'=>$request->txtdistrito,
           'direccion'=>$request->txtdireccion,
           'telefonomovil'=>$request->txttlfmovil,
           'telefonofijo'=>$request->txttlffijo,
           'fechanacimiento'=>$request->txtfechanacimiento,
           'empresa_id'=>$empresaID
     ]
     );

     }

        
       /* $persona=Persona::create(
        [
            'nombre'=>$request->txtnombre,
            'apellidopaterno'=>$request->txtpaterno,
            'apellidomaterno'=>$request->txtmaterno,
            'email'=>$request->txtemail,
            'dni'=>$request->textdni,
            'distrito'=>$request->txtdistrito,
            'direccion'=>$request->txtdireccion,
            'telefonomovil'=>$request->txttlfmovil,
            'telefonofijo'=>$request->txttlffijo,
            'fechanacimiento'=>$request->txtfechanacimiento
        ]
        );

       
        return redirect('persona')->with('success','PERSONA REGISTRADO CORRECTAMENTE');*/

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
    //
    /*if($request->ValorBuscar==null){
      return redirect('persona')->with('success','USTED TIENE QUE INGRESAR UN FILTRO');
    }else{
    if($request->ValorBuscar=='nombre'){
    $personas=Persona::latest()->whereRaw("nombre like '".$request->txtBuscarValor."%'")->paginate(5); 

    }elseif($request->ValorBuscar=='apellidopaterno'){
    $personas=Persona::latest()->whereRaw("apellidopaterno like '".$request->txtBuscarValor."%'")->paginate(5);

    }elseif ($request->ValorBuscar=='apellidomaterno'){
    $personas=Persona::latest()->whereRaw("apellidomaterno like '".$request->txtBuscarValor."%'")->paginate(5); 
    }  
    if(count($personas)==0){
       return redirect('persona')->with('success','NO SE ENCONTRARON NINGUN REGISTRO');
    }else{
          return view('persona.index',['persona'=>$personas]);
    }   

    }*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
     $persona = Persona::findOrFail($id);
     return response()->json(['msg' => 'Datos de persona','listado'=>$persona,'success' => true], 200);
     // return view('persona.edit',compact("persona"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
     $id=$request->id;
     $persona=Persona::findOrFail($id);
     $persona->nombre=$request->nombre;
     $persona->apellidopaterno =$request->appaterno;
     $persona->apellidomaterno=$request->apmaterno;
     $persona->email=$request->email;
     $persona->dni=$request->dni;
     $persona->distrito=$request->distrito;
     $persona->direccion=$request->direccion;
     $persona->telefonomovil=$request->telefonomovil;
     $persona->telefonofijo=$request->telefonfijo;
     $persona->fechanacimiento=$request->fechanac;                   
  
     $persona->save();
     
     
     // return redirect('persona')->with('success','USUARIO EDITADO');      
     //$value_session=$mensaje->session()->get();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

 
    if ($request->ajax()){
        
    $rol=Persona::findOrFail($request->textoeliminaPersona);
    $rol->estado="0";
    $rol->save();

    DB::table('users')->where('persona_id',$request->textoeliminaPersona)->update(['estado' => '0']);
    
    }  
      /*  $persona=Persona::findOrFail($id);
        $persona->estado='0';
        $persona->save();*/

       /*return redirect('persona')->with('success','PERSONA ELIMINADA');*/


    }
    public function importExcelPersona(Request $request){

      if($request->hasfile('import_personas')){
             

            $path = $request->file("import_personas")->getRealPath();

                    // $data = \Excel::load($path)->get();
            // $data = \Excel::load($path, function($reader) {
         //                                        } ,null,true)->get();
                    $data = \Excel::load($path,function($reader) {
                                                    // your code
                                                    } ,null,true)->get();




            if($data->count()){
              foreach($data as $key => $value){
                 $listado_persona[] = [   
                                  
                                                        "id"=>$value->id, 
                                                        "nombre"=>$value->nombre, 
                                                        "apellidopaterno"=>$value->apellidopaterno, 
                                                        "apellidomaterno"=>$value->apellidomaterno, 
                                                        "email"=>$value->email,
                                                        "dni"=>$value->dni,
                                                        "distrito"=>$value->distrito,
                                                        "direccion"=>$value->direccion,
                                                        "telefonomovil"=>$value->telefonomovil,
                                                        "telefonofijo"=>$value->parcial3,
                                                        "fechanacimiento"=>$value->parcial3,
                                                        "empresa_id"=>$value->parcial3
                                                        
                                         ];
            
              }

           if(!empty($listado_persona)){

                // dd($actividades_array);
                Persona::insert($listado_persona);
                // return redirect()->route('actividad.index')->with('exito','¡Listo! Se ha importado las actividades');
                return redirect("/");
                //\Session::flash("success","archivo subido correctamente");
              }   
            }

          }else{
            // return redirect()->back()->with('error','No se ha realizado la importación.');
            // \Session::flash("warning","no hay archivo a subir");
            return "NO INSERTO";
          }
                    /*
        } catch(\Exception $e){
            return redirect()->back()->with('error','No se ha realizado la importación.');
        } */

    }

}
