<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('login/login');
    }

    public function login(Request $request){

    $usuario=$request->userusuario;
    $clave=$request->userclave;

    if(Auth::attempt(['dni' => $usuario, 'password' => $clave])){

    //$profile=DB::select("select color,path from data_caracteristicas_profile where dni='".$usuario."'");
  
    //$request->session()->put(['edwin'=>'master instructor']);
    //session(['peter'=>'student']);
    //return $request->session()->all();
    //$request->session()->get('victor');

    //return redirect('persona');

    //$request->session()->forget('edwin1');

     /*session(['edwin2'=>'you teacher']);
    return session('edwin2');*/

    //$request->session()->flush();
    //return $request->session()->all();
    
    /*clase con flash

    $request->session()->flash('message','Post has been created');
    return $request->session()->get('message');
  
    $request->session()->reflash();
    $request->session->keep('message');*/
    $persona_id=DB::select("select persona_id from users where dni='".$usuario."'");
    //dd($persona_id);
    foreach($persona_id as $resultado){
        $personaID=$resultado->persona_id;
    }     
    session(['idepersona'=>$personaID]);
    //return session('idepersona');
    return redirect('persona');

  }else{
      

    return back()->with('message','El usuario o la contraseña es incorrecta');
            
  }

  }

  public function logout(){
    
    Auth::logout();
    return redirect("/");
  }


}
