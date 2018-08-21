<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //    
    $variablesession=session('idepersona');

    $empresa=Usuario::join('personas','users.persona_id','=','personas.id')->select('personas.empresa_id')->where('personas.id','=',$variablesession)->get();
    foreach($empresa as $resultado){
        $empresaID=$resultado->empresa_id;
     }
    $usuarios=Usuario::join('roles','users.rol_id','=','roles.id')->join('personas','users.persona_id','=','personas.id')->select("users.id as id","personas.nombre as p","users.dni as dni","roles.nombre as nombre")->where("users.estado","=","1")->where("personas.empresa_id","=",$empresaID)->get();
    //dd($usuarios);
    $personas_sin_usuario=DB::select("select * from view_personas_sin_usuario where empresa_id='".$empresaID."'");

    $Colum_rol=DB::table('roles')->select('id','nombre')->where('estado','=','1')->get();

    $profiles=DB::table('profiles')->select('color','path')->where('empresa_id','=',$empresaID)->get();

      foreach ($profiles as $resultado2) {
           $ProfilePath=$resultado2->path;
           $ProfileColor=$resultado2->color;
      }

    return view('usuario.index',compact("usuarios","personas_sin_usuario","Colum_rol","ProfileColor","ProfilePath"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
      /*$fechaActual=date('Y-m-d');
      $Colum_rol=DB::table('roles')->select('id','descripcion')->get();        
      return view("usuario.create",compact("fechaActual","Colum_rol"));*/
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
       
       $id_persona=DB::select("select id from View_personas_sin_usuario where dni='".$request->txtpersona."'");
       foreach ($id_persona as $persona_id) {
             $valor=$persona_id->id;
       }

          Usuario::create(
        [   

           'dni'=>$request->txtdni,
           'password'=>bcrypt($request->txtclave),
           'rol_id'=>$request->txtrol,
           'persona_id'=>$valor
        ]
        );

    }

    return redirect('usuario')->with('success','USUARIO REGISTRADO CORRECTAMENTE');
        // 
       /* $this->validate($request,[
        'txtdni'=>'required|max:8',
        'txtclave'=>'required|max:20',
        'txtrol'=>'required'
        ]
        );

        $usuario=new Usuario();
        $usuario->dni=$request->txtdni;
        $usuario->password=bcrypt($request->txtclave);
        $usuario->rol_id=$request->txtrol;
        $usuario->save();
        return redirect('usuario')->with('success','USUARIO REGISTRADO CORRECTAMENTE');---------*/


        //DB::table('empleado')->insert( ['codemp' => $request->txtcodigo, 'nomemp' => $request->txtnombre,'appemp' =>$request->txtapepat,'apmemp' =>$request->txtapemat,'dniemp' => $request->txtdni] ); 
        
        //return redirect()->route('usuario.index');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
      
    //return "cast(".$request->ValorBuscar." as varchar(150))  like '".$request->txtBuscarValor."'";exit;
    /*if($request->ValorBuscar==null){
       return redirect('usuario')->with('success','USTED TIENE QUE INGRESAR UN FILTRO');
    }else{    
    //$this->validate($request,[
     //   'ValorBuscar'=>'required|max:8',
      //  'txtBuscarValor'=>'required|max:20',        
       // ]
    //);  
    //return $request->txtBuscarValor;exit;  
    //$usuarios=Usuario::latest()->whereRaw("cast(".$request->ValorBuscar." as varchar(150))  like '".$request->txtBuscarValor."%'")->paginate(5); 
    if($request->ValorBuscar=='dni'){

      $usuarios=Usuario::join('roles','users.rol_id','=','roles.id')->select("users.id as id","users.dni as dni","roles.nombre as nombre")->whereRaw("cast(users.dni as varchar(150)) like '".$request->txtBuscarValor."%'")->paginate(5);

    }elseif($request->ValorBuscar=='rol_id'){

    $usuarios=Usuario::join('roles','users.rol_id','=','roles.id')->select("users.id as id","users.dni as dni","roles.nombre as nombre")->whereRaw("nombre like '".$request->txtBuscarValor."%'")->paginate(5);

    }  
    if(count($usuarios)==0){
       return redirect('usuario')->with('success','NO SE ENCONTRARON NINGUN REGISTRO');
    }else{
       return view('usuario.index',['usuario'=>$usuarios]);
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
        //
     $usuario = Usuario::findOrFail($id);
     $roles = DB::table('roles')->select('id','nombre')->get();  
     /*$usuario=Usuario::select('password')->where('id','=',$id)->get();
     $clave=decrypt($usuario);              
     dd($clave);*/
     /*$fechaActual=date('Y-m-d');*/
     return view('usuario.edit',compact("usuario","roles"));
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
        $this->validate($request,[
        'txtdni'=>'required|max:8',
        'txtrol'=>'required'
        ]
        );
        $usuario=Usuario::findOrFail($id);          
        $usuario->dni=$request->txtdni;
        $usuario->rol_id =$request->txtrol;
        $usuario->password=bcrypt($request->txtclave);                    
        $usuario->save();        
        //$value_session=$mensaje->session()->get();
        return redirect('usuario')->with('success','USUARIO EDITADO CORRECTAMENTE');
        //return redirect()->route('usuario.index');
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
        
       $usuario=Usuario::findOrFail($request->textoeliminarUsuario);
       $usuario->estado="0";
       $usuario->save();
      
    }  

    /*      $user=Usuario::findOrFail($id);
          $user->estado="0";
          $user->save();
          return redirect('usuario')->with('success','USUARIO ELIMINADO');*/        
    


    }


}
