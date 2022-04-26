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


$sql="UPDATE escala_mental (nombre_usuario,zona,distrito,modalidad_atencion,lugar_atencion,edad_anual,edad_meses,fecha_aplicacion,aplicado_por) SET ('$nombre_usuario','$zona','$distrito','$modalidad_atencion','$lugar_atencion','$edad_anual','$edad_meses','$fecha_aplicacion', '$aplicado_por')";

$sql2="UPDATE pregunta_uno (dia_estamos,mes_estamos,ano_estamos,dia_semana,hora_estamos,puntuacion_uno) SET ('$dia_estamos','$mes_estamos','$ano_estamos','$dia_semana','$hora_estamos','$puntuacion_uno')";

$sql3="UPDATE pregunta_dos (dia_estamos_dos,mes_estamos_dos,ano_estamos_dos,dia_semana_dos,hora_estamos_dos,puntuacion_dos) SET ('$dia_estamos_dos','$mes_estamos_dos','$ano_estamos_dos','$dia_semana_dos','$hora_estamos_dos','$puntuacion_dos')";
$sql4="UPDATE pregunta_tres (lugar_estamos,departamento_estamos, barrio_actual,ciudad_estamos,pais_estamos,puntuacion_tres) SET ('$lugar_estamos','$departamento_estamos', '$barrio_actual','$ciudad_estamos','$pais_estamos','$puntuacion_tres')";
$sql5="UPDATE pregunta_cuatro (repeticion_ensayo,papel,bicicleta,cuchara,puntuacion_cuatro) SET ('$repeticion_ensayo','$papel','$bicicleta','$cuchara','$puntuacion_cuatro')";

$sql6="UPDATE pregunta_cinco (uno,dos,tres,cuatro,cinco,puntuacion_cinco) SET ('$uno','$dos','$tres','$cuatro','$cinco','$puntuacion_cinco')";

$sql7="UPDATE pregunta_seis (papel_uno,bicicleta_dos,cuchara_tres,puntuacion_seis) SET ('$papel_uno','$bicicleta_dos','$cuchara_tres','$puntuacion_seis')";

$sql8="UPDATE pregunta_siete (mostrarle_lapiz,mostrarle_reloj,puntuacion_siete) SET ('$mostrarle_lapiz','$mostrarle_reloj','$puntuacion_siete')";

$sql9="UPDATE pregunta_ocho (consigna,puntuacion_ocho) SET ('$consigna','$puntuacion_ocho')";

$sql10="UPDATE pregunta_nueve (comprension_ejecucion, doblar_mitad, dejelo_suelo,puntuacion_nueve) SET ('$comprension_ejecucion', '$doblar_mitad', '$dejelo_suelo','$puntuacion_nueve')";

$sql11="UPDATE pregunta_diez (pidale_leer, puntuacion_diez) SET ('$pidale_leer', '$puntuacion_diez')";

$sql12="UPDATE pregunta_once (escriba_frase,puntuacion_once) SET ('$escriba_frase','$puntuacion_once')";
$sql13="UPDATE pregunta_doce (copie_dibujo,puntuacion_doce) SET ('$copie_dibujo', '$puntuacion_doce')";
$sql14="UPDATE total_preguntas (puntuacion_total) SET ('$puntuacion_total')";

$sql15="UPDATE datos_funcionario (nombre_funcionario, numero_identificacion_funcionario, cargo, registro_profesional) SET ('$nombre_funcionario','$numero_identificacion_funcionario','$cargo','$registro_profesional')";

//$query= mysqli_query($con,$sql);

if($base->query($sql)){
    Header("Location: examen_estado_mental.html");

?>