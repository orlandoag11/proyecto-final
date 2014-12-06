<?php

require_once("BaseModel.php");

class Receta extends BaseModel{

	public $table = "usuarios";

	protected $fields = array(
		'nombre' 			=> 'required',
		'apellido_paterno'  => 'required',
		'apellido_materno'  => '',
		'fecha_nacimiento'  => 'required',
		'sexo'  => 'required',
		'usuario'  => 'required',
		'password'  => 'required',
		'correo'  => 'required',
		'profesion'  => '',
		'foto'  => '',
		'profesiones_id'  => '',
	);	

	protected $custom_fields = array(
		'nombre_completo',
	);

	public function prepareData($data){
		$data['nombre_completo'] = $data['nombre']." ".$data['apellido_paterno']." ".$data['apellido_materno'];
		return $data;
	}
	
}