<?php

require_once("BaseRepo.php");

class UsuariosRepo extends BaseRepo{

    function getModel(){
        return new Usuario();
    }    

	function alumnos(){
		$mysql = new DBMannager();
		$mysql->connect();

		$mysql->execute("SELECT * FROM alumnos");
		$result = $mysql->getArray();

        return $this->arrayModel($result);
	}

	

}