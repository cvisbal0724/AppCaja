<?php namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model {

	protected $table = 'modulo';
	protected $primaryKey='id';
	//protected $with = array('propiedad');	
	protected $guarded = array();
	public static $rules = array();
	public $timestamps = false;

}
