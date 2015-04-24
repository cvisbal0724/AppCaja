<?php namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {

	protected $table = 'usuario';
	protected $primaryKey='id';
	//protected $with = array('propiedad');	
	protected $guarded = array();
	public static $rules = array();
	public $timestamps = false;



}
