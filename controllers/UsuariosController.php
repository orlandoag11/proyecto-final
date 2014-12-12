<?php
//CONSULTA A LA BASE DE DATOS

include ROOT . "/models/Usuario.php";
include ROOT . "/repositories/UsuariosRepo.php";

class UsuariosController{

	function __construct() {
		
	}
 
function login(){		
		view('login');
	}

	function loginpost(){
		$correo = $_POST ["correo"];
		$password = $_POST ["password"];
		$repo = new UsuariosRepo();//enviar valores
		$usuario = $repo->login($correo,$password);
        
		if($usuario==true){
			setSession('mensaje',"BIENVENIDO");
			redirect('');
		}else{		
			$errors = ["El usuario o password es Incorrecto."];	
			setSession('errores', $errors);
			redirect('usuarios/login');
		}
	}
   
	public function logout(){
		session_destroy();
		redirect('usuarios/login');
	}
function registrarse(){		
		view('registrarse');
	}

	function lista(){		
		$repo = new AlumnosRepo();
		$alumnos = $repo->alumnos();
		view('alumnos/lista',compact('alumnos'));
	}

	function agregar(){
		$repo = new CarrerasRepo();
		$carreras = $repo->lista();
		view('alumnos/agregar', compact('carreras'));
	}

	function guardar(){		

		$usuario = new Usuario();
		$usuario->setData($_POST);

		if($usuario->save()){
			setSession('mensaje',"La usuario se Registro correctamente.");
			redirect('usuarios/registrarse');
		}else{		
			$errors = $usuario->errors;	
			setSession('errores', $errors);
			redirect('usuarios/registrarse');
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


