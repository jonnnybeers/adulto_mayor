<?php


    session_start();

  /*if(!isset($_SESSION["usuario"])){

    header("Location:index.php");
  }*/
	
	require("conexion.php");
	
	
	//rescatar el NUMERO_DE_IDENTIFICACION,
	
	$numero_identificacion=$_GET['id'];
	
	
	$sql="DELETE FROM pacientes WHERE numero_identificacion='$numero_identificacion'";
	//$query=mysql_query($con,$sql){

	//header("Location:eliminar.php");
	
	if($base->query($sql)){
		header("Location: escala_depresion.html");
	}



	
	?>