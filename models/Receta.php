<?php

require_once("BaseModel.php");

class Receta extends BaseModel{

	public $table = "recetas";

	protected $fields = array(
		'nombre' 			=> 'required',
		'descripcion'  => '',
		'porciones'  => 'required',
		'tiempo_preparacion'  => '',
		'tiempo_coccion'  => '',
		'ingredientes'  => 'required',
		'instrucciones'  => '',
		'categorias_id'  => 'required',
		'foto' => ''
	);	

	protected $custom_fields = array(
		'nombre_completo',
	);

	public function prepareData($data){
		$data['nombre'];
		return $data;
	}
	
}