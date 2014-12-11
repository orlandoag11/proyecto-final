<?php

require_once("BaseRepo.php");

class RecetasRepo extends BaseRepo{

    function getModel(){
        return new Receta();
    }    

	function alumnos(){
		$mysql = new DBMannager();
		$mysql->connect();

		$mysql->execute("SELECT * FROM alumnos");
		$result = $mysql->getArray();

        return $this->arrayModel($result);
	}

	

}