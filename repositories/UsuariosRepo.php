<?php

include("BaseRepo.php");

class UsuariosRepo extends BaseRepo{

    function getModel(){
        return new Usuario();
    }    

    function login($correo, $password){

    	$mysql = new DBMannager();
    	$mysql->connect();

    	$query="SELECT * FROM usuarios WHERe correo=? AND password=?";

    	$mysql->execute($query, array($correo , $password));

    	 if($mysql->count() == 1){
             $usuario = $mysql->getRow();
             setSession("id", $usuario['id']);
              
             return true;
        }else{
            return false;
    }

    }

}