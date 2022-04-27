<?php
include("../includes/conexion.php");
//$con=conectar();


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
$numero_identificacion_funcionario=$_POST['numero_identificacion_funcionario'];
$cargo=$_POST['cargo'];
$registro_profesional=$_POST['registro_profesional'];


$sql="INSERT INTO escala_depresion (nombre_usuario,zona,distrito,modalidad_atencion,lugar_atencion,edad_anual,edad_meses,fecha_aplicacion) VALUES ($nombre_usuario,$zona,$distrito,$modalidad_atencion,$lugar_atencion,$edad_anual,$edad_meses,$fecha_aplicacion)";

$sql2="INSERT INTO preguntas_escala_depresion (satisfecho_vida,intereses_actividades,vida_vacia,aburrido_frecuentemente,animo_todo_tiempo,preocupado_malo,feliz_tiempo,frecuencia_desamparado,cosas_nuevas,dia_semana_dos,hora_estamos_dos,puntuacion_dos,lugar_estamos,departamento_estamos, barrio_actual,ciudad_estamos,problemas_memoria,maravilloso_vivo,inutil_desprecio,lleno_energia,situacion_actual,total_todo) VALUES ('$satisfecho_vida','$intereses_actividades','$vida_vacia','$aburrido_frecuentemente','$animo_todo_tiempo','$preocupado_malo','$feliz_tiempo','$frecuencia_desamparado','$cosas_nuevas','$dia_semana_dos','$hora_estamos_dos','$puntuacion_dos','$lugar_estamos','$departamento_estamos', '$barrio_actual','$ciudad_estamos','$problemas_memoria','$maravilloso_vivo','$inutil_desprecio','$lleno_energia','$situacion_actual','$total_todo')";
$sql3="INSERT INTO datos_funcionario (nombre_funcionario, numero_identificacion_funcionario, cargo, registro_profesional) VALUES ('$nombre_funcionario','$numero_identificacion_funcionario','$cargo','$registro_profesional')";

//$query= mysqli_query($con,$sql);

if($base->query($sql)){
    Header("Location: escala_depresion.html");
    
}else {
}
?>






