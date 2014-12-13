<?php
//CONSULTA A LA BASE DE DATOS

include ROOT . "/models/Usuario.php";
include ROOT . "/repositories/UsuariosRepo.php";

class UsuariosController{

 
function login(){		
		view('login');
	}
	

	function loginpost(){
		$datos = $_POST;
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

	public function perfil(){
		$repo = new UsuariosRepo();
		$usuario = $repo->find(getSession('id'));
		//var_dump($usuario);
		view('perfil',compact('usuario'));
	}

	public function actualizaPerfil(){
		//var_dump(getSession('id'));die();
		$repo = new UsuariosRepo();
		$usuario = $repo->find(getSession('id'));	

		$usuario->setData($_POST);
		$archivoCargado=true;

		if(isset($_FILES['foto']) && strlen($_FILES['foto']['name'])>0){
			$archivoCargado=$repo->uploadImage($_FILES, 'foto','perfil.jpg');	
		}
		
			
		if($usuario->save() && $archivoCargado === TRUE){
			setSession('mensaje',"El perfil se actualizado correctamente.");
			redirect('');
		}else{		
			$errors = $usuario->errors;	
			if($archivoCargado !== TRUE){
				array_push($errors, $archivoCargado);
			}			
			
			setSession('errores', $errors);
			redirect('usuarios/perfil');
			//view('alumnos/agregar',compact('errors'));
		}		

	}
	
}


