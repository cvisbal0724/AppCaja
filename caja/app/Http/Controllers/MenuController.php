<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\models\Menu as Menu;
use DB;

class MenuController extends Controller {

	public function ConsultarMenu(){

		//$menu=DB::select('select menu.id, menu.id_modulo, menu.orden, menu.padre, menu.etiqueta, menu.destino, menu.imagen 
			//from menu inner join modulo on menu.id_modulo=modulo.id where modulo.id_aplicacion=2');
		
		$menu=DB::table('menu')
		->join('modulo','menu.id_modulo','=','modulo.id')
		->select(DB::raw('menu.id, menu.id_modulo, menu.orden, menu.padre, menu.etiqueta, menu.destino, menu.imagen '))
		->where('modulo.id_aplicacion',2)->get();

		return $menu;

	}

}
