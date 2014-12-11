<?php

require_once("BaseModel.php");

class Carrera extends BaseModel{

	public $table = "usuarios";

	protected $fields = array(
		'nombre' 			=> 'required',

	);

}