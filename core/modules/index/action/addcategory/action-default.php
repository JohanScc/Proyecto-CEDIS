<?php

if(count($_POST)>0){
	$user = new CategoryData();
	$user->name = $_POST["name"];
	$user->descripcion = $_POST["descripcion"];
	$user->status_id = $_POST["estado"];
	$user->add();

print "<script>window.location='index.php?view=categories';</script>";


}


?>