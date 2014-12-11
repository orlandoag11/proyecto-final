<?php
//CONSULTA A LA BASE DE DATOS

include ROOT . "/models/Carrera.php";
include ROOT . "/repositories/CarrerasRepo.php";

class CarrerasController{

	function __construct() {
		
	}

	function lista(){			
		$repo = new CarrerasRepo();
		$carreras = $repo->carreras();
		view('carreras/lista',compact('carreras'));
	}

	function agregar(){
		view('carreras/agregar');
	}

	function guardar(){		

		$carrera = new Carrera();
		$carrera->setData($_POST);

		if($carrera->save()){
			setSession('mensaje',"La carrera se agrego correctamente.");
			redirect('carreras/agregar');
		}else{		
			$errors = $carrera->errors;	
			setSession('errores', $errors);
			redirect('carreras/agregar');
			//view('alumnos/agregar',compact('errors'));
		}
	}	


function modificar($id){
		$repo = new CarrerasRepo();
		$carrera = $repo->find($id);

		view('carreras/agregar',compact('carrera')); 
	}

	function actualizar($id){
		$repo = new CarrerasRepo();
		$carrera = $repo->find($id);		
		$carrera->setData($_POST);

		if($carrera->save()){
			setSession('mensaje',"La carrera se actualizado correctamente.");
			redirect('carreras/modificar/'.$id);
		}else{		
			$errors = $carrera->errors;	
			setSession('errores', $errors);
			redirect('carreras/modificar/'.$id);
			//view('alumnos/agregar',compact('errors'));
		}

	}

	function eliminar($id){

		$repo = new CarrerasRepo();
		$carrera = $repo->find($id);

		$carrera->delete();			
		setSession('mensaje',"La carrea se ha eliminado correctamente.");
		redirect('carreras/lista');
	}
}

