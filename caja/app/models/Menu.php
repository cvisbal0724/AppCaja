<?php namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {

	protected $table = 'menu';
	protected $primaryKey='id';
	//protected $with = array('propiedad');	
	protected $guarded = array();
	public static $rules = array();
	public $timestamps = false;

	public function Modulo(){

		return $this->belongsTo('Modulo', 'id_modulo','id');


	}

}
