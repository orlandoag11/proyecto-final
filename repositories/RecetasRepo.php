<?php

require_once("BaseRepo.php");

class RecetasRepo extends BaseRepo{

    function getModel(){
        return new Receta();
    }    

	function recetas(){
		$mysql = new DBMannager();
		$mysql->connect();

		$mysql->execute("SELECT * FROM recetas");
		$result = $mysql->getArray();

        return $this->arrayModel($result);
	}

	

}