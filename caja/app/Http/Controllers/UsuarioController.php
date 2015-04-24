<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use App\models\Usuario;

class UsuarioController extends Controller {

	
	public function Loguear(Request $request){


		$credeciales=array('usuario'=>$request->input('usuario'),'password'=>$request->input('clave'));
		$result=DB::select('EXEC validar_acceso :usuario,:password',$credeciales);		
		
		if ($result[0]->id > 0) {

			Session::put("id_usuario",$result[0]->id);			
			return array('id'=>$result[0]->id,'nombre'=>'','_token'=>csrf_token());
			
		}

		return "Error";
	}

	public function Desloguear(){

	  Session::flush();
	  return array('id'=>0,'nombre'=>'');		

	}

	public function VerificarLogueo(){

		if (Session::has('id_usuario')) {
			return array('id'=>Session::get('id_usuario'),'nombre'=>'','_token'=>csrf_token());
		}else{
			return array('id'=>0,'nombre'=>'','_token'=>'');
		}
		
	}

}
