<?php
//CONSULTA A LA BASE DE DATOS

include ROOT . "/models/Receta.php";
include ROOT . "/repositories/RecetasRepo.php";

class RecetasController{

	function __construct() {
		
	}
function receta(){		
		view('receta');
	}


function subireceta(){		
		view('subireceta');
	}
function lista(){		
		$repo = new RecetasRepo();
		$recetas = $repo->recetas();
		view('recetas/lista',compact('recetas'));
	
	}
	public function actualizaLista(){
		$repo = new RecetasRepo();
		$receta = $repo->find(getSession('id'));	

		$usuario->setData($_POST);
		$archivoCargado=true;

		if(isset($_FILES['foto']) && strlen($_FILES['foto']['name'])>0){
			$archivoCargado=$repo->uploadImage($_FILES, 'foto','receta.jpg');	
		}
		
			
		if($usuario->save() && $archivoCargado === TRUE){
			setSession('mensaje',"La receta se actualizado correctamente.");
			redirect('recetas/lista');
		}else{		
			$errors = $receta->errors;	
			if($archivoCargado !== TRUE){
				array_push($errors, $archivoCargado);
			}			
			
			setSession('errores', $errors);
			redirect('recetas/lista');
			//view('alumnos/agregar',compact('errors'));
		}		

	}
	



	//function lista(){		
		//$repo = new RecetasRepo();
		////$recetas = $repo->recetas();
		//view('recetas/lista',compact('recetas'));
	//}

	function agregar(){
		$repo = new CarrerasRepo();
		$carreras = $repo->lista();
		view('alumnos/agregar', compact('carreras'));
	}

	function guardar(){		

		$receta = new Receta();
		$receta->setData($_POST);

		if($receta->save()){
			setSession('mensaje',"la receta se agrego correctamente.");
			redirect('recetas/subireceta');
		}else{		
			$errors = $receta->errors;	
			setSession('errores', $errors);
			redirect('recetas/subireceta');
			//view('alumnos/agregar',compact('errors'));
		}
	}	

	function modificar($id){
		$repo = new AlumnosRepo();
		$alumno = $repo->find($id);
		$repoCarrera = new CarrerasRepo();
		$carreras = $repoCarrera->lista();
		view('alumnos/agregar',compact('alumno','carreras')); 
	}

	function actualizar($id){
		$repo = new AlumnosRepo();
		$alumno = $repo->find($id);		
		$alumno->setData($_POST);

		if($alumno->save()){
			setSession('mensaje',"El alumno se actualizado correctamente.");
			redirect('alumnos/modificar/'.$id);
		}else{		
			$errors = $alumno->errors;	
			setSession('errores', $errors);
			redirect('alumnos/modificar/'.$id);
			//view('alumnos/agregar',compact('errors'));
		}

	}

	function eliminar($id){

		$repo = new AlumnosRepo();
		$alumno = $repo->find($id);

		$alumno->delete();			
		setSession('mensaje',"El alumno se ha eliminado correctamente.");
		redirect('alumnos/lista');
	}
}
 


