<?php

require_once("BaseModel.php");

class Usuario extends BaseModel{

	public $table = "usuarios";

	protected $fields = array(
		'nombre' 			=> 'required',
		'apellido_paterno'  => 'required',
		'apellido_materno'  => '',
		
		'usuario'  => 'required',
		'password'  => 'required',
		'profesiones_id'  => 'required',
		
	);	

	protected $custom_fields = array(
		'nombre_completo',
	);

	//public function prepareData($data){
	//	$data['nombre_completo'] = $data['nombre']." ".$data['apellido_paterno']." ".$data['apellido_materno'];
	//	return $data;
	//}
	
}