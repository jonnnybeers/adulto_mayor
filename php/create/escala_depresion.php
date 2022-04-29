<?php

include("../../includes/conexion.php");
$id0 = 0;
$nombre_usuario=$_POST['nombre_usuario'];
$zona=$_POST['zona'];
$distrito=$_POST['distrito'];
$modalidad_atencion=$_POST['modalidad_atencion'];
$lugar_atencion=$_POST['lugar_atencion'];
$edad_anual=$_POST['edad_anual'];
$edad_meses=$_POST['edad_meses'];  
$fecha_aplicacion=$_POST['fecha_aplicacion'];
$aplicado_por=$_POST['aplicado_por'];
$satisfecho_vida=$_POST['satisfecho_vida'];
$intereses_actividades=$_POST['intereses_actividades'];
$vida_vacia=$_POST['vida_vacia'];
$aburrido_frecuentemente=$_POST['aburrido_frecuentemente'];
$animo_todo_tiempo=$_POST['animo_todo_tiempo']; 
$preocupado_malo=$_POST['preocupado_malo'];
$feliz_tiempo=$_POST['feliz_tiempo'];
$frecuencia_desamparado=$_POST['frecuencia_desamparado'];
$cosas_nuevas=$_POST['cosas_nuevas'];
$problemas_memoria=$_POST['problemas_memoria'];
$maravilloso_vivo=$_POST['maravilloso_vivo'];
$inutil_desprecio=$_POST['inutil_desprecio'];
$lleno_energia=$_POST['lleno_energia'];
$situacion_actual=$_POST['situacion_actual'];
$percepcion=$_POST['percepcion'];
$total_todo=$_POST['total_todo'];
$nombre_funcionario=$_POST['nombre_funcionario'];
$cargo=$_POST['cargo'];
$registro_profesional=$_POST['registro_profesional'];


$sql="INSERT INTO escala_depresion (id_escala_depresion,nombre_usuario,zona,distrito,modalidad_atencion,lugar_atencion,edad_anual,edad_meses,fecha_aplicacion,id_escala_depresion) VALUES ('$id0','$nombre_usuario','$zona','$distrito','$modalidad_atencion','$lugar_atencion','$edad_anual','$edad_meses','$fecha_aplicacion')";

$ultimoId = $base->query('SELECT MAX(id_escala_depresion) FROM `escala_depresion`');
$id = $ultimoId->fetchAll()[0]["MAX(id_escala_depresion)"];

$sql2="INSERT INTO preguntas_escala_depresion (id_preguntas_escala_depresion,satisfecho_vida,intereses_actividades,vida_vacia,aburrido_frecuentemente,animo_todo_tiempo,preocupado_malo,feliz_tiempo,frecuencia_desamparado,cosas_nuevas,problemas_memoria,maravilloso_vivo,inutil_desprecio,lleno_energia,situacion_actual,percepcion,total_todo) VALUES ('$id0','$satisfecho_vida','$intereses_actividades','$vida_vacia','$aburrido_frecuentemente','$animo_todo_tiempo','$preocupado_malo','$feliz_tiempo','$frecuencia_desamparado','$cosas_nuevas','$problemas_memoria','$maravilloso_vivo','$inutil_desprecio','$lleno_energia','$situacion_actual','$percepcion','$total_todo','$id')";
$sql3="INSERT INTO datos_funcionario (id_datos_funcionario, nombre_funcionario, cargo, registro_profesional,id_escala_depresion) VALUES ('$id0','$nombre_funcionario','$cargo','$registro_profesional','$id')";

$base->query($sql2);
$base->query($sql3);



$_SESSION['message'] = $nombres . ' guardado exitosamente';
Header("Location: ../../views/escala_depresion.html");




