<?php
include("conexion.php");
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
$dia_estamos=$_POST['dia_estamos'];
$mes_estamos=$_POST['mes_estamos'];
$ano_estamos=$_POST['ano_estamos'];
$dia_semana=$_POST['dia_semana'];
$hora_estamos=$_POST['hora_estamos']; 
$puntuacion_uno=$_POST['puntuacion_uno'];
$dia_estamos_dos=$_POST['dia_estamos_dos'];
$mes_estamos_dos=$_POST['mes_estamos_dos'];
$ano_estamos_dos=$_POST['ano_estamos_dos'];
$dia_semana_dos=$_POST['dia_semana_dos'];
$hora_estamos_dos=$_POST['hora_estamos_dos'];
$puntuacion_dos=$_POST['puntuacion_dos'];
$lugar_estamos=$_POST['lugar_estamos'];
$departamento_estamos=$_POST['departamento_estamos'];
$barrio_actual=$_POST['barrio_actual'];
$ciudad_estamos=$_POST['ciudad_estamos'];
$pais_estamos=$_POST['pais_estamos'];
$puntuacion_tres=$_POST['puntuacion_tres']; 
$repeticion_ensayo=$_POST['repeticion_ensayo'];
$papel=$_POST['papel'];
$bicicleta=$_POST['bicicleta'];
$cuchara=$_POST['cuchara'];
$puntuacion_cuatro=$_POST['puntuacion_cuatro'];
$uno=$_POST['uno'];
$dos=$_POST['dos'];
$tres=$_POST['tres'];
$cuatro=$_POST['cuatro'];
$cinco=$_POST['cinco'];
$puntuacion_cinco=$_POST['puntuacion_cinco'];
$papel_uno=$_POST['papel_uno'];
$bicicleta_dos=$_POST['bicicleta_dos']; 
$cuchara_tres=$_POST['cuchara_tres'];
$puntuacion_seis=$_POST['puntuacion_seis'];
$mostrarle_lapiz=$_POST['mostrarle_lapiz'];
$mostrarle_reloj=$_POST['mostrarle_reloj'];
$puntuacion_siete=$_POST['puntuacion_siete'];
$consigna=$_POST['consigna'];
$puntuacion_ocho=$_POST['puntuacion_ocho'];
$comprension_ejecucion=$_POST['comprension_ejecucion'];
$doblar_mitad=$_POST['doblar_mitad'];
$dejelo_suelo=$_POST['dejelo_suelo'];
$puntuacion_nueve=$_POST['puntuacion_nueve'];
$escriba_frase=$_POST['escriba_frase'];
$puntuacion_once=$_POST['puntuacion_once'];
$copie_dibujo=$_POST['copie_dibujo'];
$puntuacion_doce=$_POST['puntuacion_doce'];
$puntuacion_total=$_POST['puntuacion_total'];
$nombre_funcionario=$_POST['nombre_funcionario'];
$numero_identificacion_funcionario=$_POST['numero_identificacion_funcionario'];
$cargo=$_POST['cargo'];
$registro_profesional=$_POST['registro_profesional'];


$sql="INSERT INTO escala_mental (nombre_usuario,zona,distrito,modalidad_atencion,lugar_atencion,edad_anual,edad_meses,fecha_aplicacion,aplicado_por) VALUES ('$nombre_usuario','$zona','$distrito','$modalidad_atencion','$lugar_atencion','$edad_anual','$edad_meses','$fecha_aplicacion', '$aplicado_por')";

$sql2="INSERT INTO pregunta_uno (dia_estamos,mes_estamos,ano_estamos,dia_semana,hora_estamos,puntuacion_uno) VALUES ('$dia_estamos','$mes_estamos','$ano_estamos','$dia_semana','$hora_estamos','$puntuacion_uno')";

$sql3="INSERT INTO pregunta_dos (dia_estamos_dos,mes_estamos_dos,ano_estamos_dos,dia_semana_dos,hora_estamos_dos,puntuacion_dos) VALUES ('$dia_estamos_dos','$mes_estamos_dos','$ano_estamos_dos','$dia_semana_dos','$hora_estamos_dos','$puntuacion_dos')";
$sql4="INSERT INTO pregunta_tres (lugar_estamos,departamento_estamos, barrio_actual,ciudad_estamos,pais_estamos,puntuacion_tres) VALUES ('$lugar_estamos','$departamento_estamos', '$barrio_actual','$ciudad_estamos','$pais_estamos','$puntuacion_tres')";
$sql5="INSERT INTO pregunta_cuatro (repeticion_ensayo,papel,bicicleta,cuchara,puntuacion_cuatro) VALUES ('$repeticion_ensayo','$papel','$bicicleta','$cuchara','$puntuacion_cuatro')";

$sql6="INSERT INTO pregunta_cinco (uno,dos,tres,cuatro,cinco,puntuacion_cinco) VALUES ('$uno','$dos','$tres','$cuatro','$cinco','$puntuacion_cinco')";

$sql7="INSERT INTO pregunta_seis (papel_uno,bicicleta_dos,cuchara_tres,puntuacion_seis) VALUES ('$papel_uno','$bicicleta_dos','$cuchara_tres','$puntuacion_seis')";

$sql8="INSERT INTO pregunta_siete (mostrarle_lapiz,mostrarle_reloj,puntuacion_siete) VALUES ('$mostrarle_lapiz','$mostrarle_reloj','$puntuacion_siete')";

$sql9="INSERT INTO pregunta_ocho (consigna,puntuacion_ocho) VALUES ('$consigna','$puntuacion_ocho')";

$sql10="INSERT INTO pregunta_nueve (comprension_ejecucion, doblar_mitad, dejelo_suelo,puntuacion_nueve) VALUES ('$comprension_ejecucion', '$doblar_mitad', '$dejelo_suelo','$puntuacion_nueve')";

$sql11="INSERT INTO pregunta_diez (pidale_leer, puntuacion_diez) VALUES ('$pidale_leer', '$puntuacion_diez')";

$sql12="INSERT INTO pregunta_once (escriba_frase,puntuacion_once) VALUES ('$escriba_frase','$puntuacion_once')";
$sql13="INSERT INTO pregunta_doce (copie_dibujo,puntuacion_doce) VALUES ('$copie_dibujo', '$puntuacion_doce')";
$sql14="INSERT INTO total_preguntas (puntuacion_total) VALUES ('$puntuacion_total')";

$sql15="INSERT INTO datos_funcionario (nombre_funcionario, numero_identificacion_funcionario, cargo, registro_profesional) VALUES ('$nombre_funcionario','$numero_identificacion_funcionario','$cargo','$registro_profesional')";

//$query= mysqli_query($con,$sql);

if($base->query($sql)){
    Header("Location: examen_estado_mental.html");
    
}else {
}
?>



