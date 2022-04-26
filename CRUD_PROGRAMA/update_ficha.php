<?php
include("conexion.php");
//$con=conectar();

$nombre_programa=$_POST['nombre_programa'];
$vigencia=$_POST['vigencia'];
$fecha_digilenciamiento=$_POST['fecha_digilenciamiento'];
$tipo_identificacion=$_POST['tipo_identificacion'];
$fecha_expedicion=$_POST['fecha_expedicion'];
$dpto_municipio_expedicion=$_POST['dpto_municipio_expedicion'];
$nombres=$_POST['nombres'];  
$primer_apellido=$_POST['primer_apellido'];
$segundo_apellido=$_POST['segundo_apellido'];
$edad=$_POST['edad'];
$direccion_residencial=$_POST['direccion_residencial'];
$departamento=$_POST['departamento'];
$municipio=$_POST['municipio'];
$barrio_vereda=$_POST['barrio_vereda']; 
$telefono=$_POST['telefono'];
$celular=$_POST['celular'];
$nombre_familiar_acudiente=$_POST['nombre_familiar_acudiente'];
$nombres_apellidos=$_POST['nombres_apellidos'];
$parentesco=$_POST['parentesco'];
$direccion_domicilio=$_POST['direccion_domicilio'];
$telefono=$_POST['telefono'];  
$barrio_vereda=$_POST['barrio_vereda'];
$celular=$_POST['celular'];
$observaciones=$_POST['observaciones'];
$regimen_afiliacion=$_POST['regimen_afiliacion'];
$eps=$_POST['eps'];
$afiliado=$_POST['afiliado'];
$diagnostico_medico=$_POST['diagnostico_medico']; 
$entidad_certifica=$_POST['entidad_certifica'];
$observaciones_medicas=$_POST['observaciones_medicas'];
$compromisos_condiciones=$_POST['compromisos_condiciones'];  
$nombre_adulto_mayor_acudiente=$_POST['nombre_adulto_mayor_acudiente'];
$nombre=$_POST['nombre'];
$cargo=$_POST['cargo'];
$registro_profesional=$_POST['registro_profesional'];

$sql="UPDATE pacientes SET ('$nombre_programa','$vigencia','$fecha_digilenciamiento','$tipo_identificacion','$fecha_expedicion','$dpto_municipio_expedicion','$nombres','$primer_apellido','$segundo_apellido', '$edad','$direccion_residencial','$departamento','$municipio','$barrio_vereda','$telefono','$celular','$nombre_familiar_acudiente','$nombres_apellidos','$parentesco','$direccion_domicilio','$telefono','$barrio_vereda','$celular', '$observaciones','$regimen_afiliacion','$eps','$afiliado','$diagnostico_medico','$entidad_certifica','$observaciones_medicas','$compromisos_condiciones','$nombre_adulto_mayor_acudiente','$nombre_funcionario','$numero_identificacion_funcionario','$cargo','$registro_profesional', where '$numero_identificacion'
)";

$sql="UPDATE ficha_programa (nombre_programa, vigencia, fecha_digilenciamiento) SET ('$nombre_programa', '$vigencia', '$fecha_digilenciamiento')";
$sql2="UPDATE ficha_datos_adulto_mayor (tipo_identificacion, fecha_expedicion, dpto_municipio_expedicion, nombres, primer_apellido, segundo_apellido, edad) SET ('$tipo_identificacion','$fecha_expedicion','$dpto_municipio_expedicion','$nombres','$primer_apellido','$segundo_apellido', '$edad')";
$sql3="UPDATE ficha_datos_ubicacion_contacto_adulto_mayor (direccion_residencial, departamento, municipio, barrio_vereda, telefono, celular, nombre_familiar_acudiente) SET ('$direccion_residencial','$departamento','$municipio','$barrio_vereda','$telefono','$celular','$nombre_familiar_acudiente')";
$sql4="UPDATE ficha_datos_familiar_acudiente_adulto_mayor (nombres_apellidos, parentesco , direccion_domicilio, telefono , barrio_vereda,celular, observaciones) SET ('$nombres_apellidos','$parentesco','$direccion_domicilio','$telefono','$barrio_vereda','$celular', '$observaciones',)";
$sql5="UPDATE ficha_informacion_salud_adulto_mayor (regimen_afiliacion, eps, afiliado, diagnostico_medico, entidad_certifica, observaciones_medicas) SET ('$regimen_afiliacion','$eps','$afiliado','$diagnostico_medico','$entidad_certifica','$observaciones_medicas',)";
$sql6="UPDATE ficha_compromiso_condiciones_especificas_adulto_mayor (compromisos_condiciones, nombre_adulto_mayor_acudiente) SET ('$compromisos_condiciones', '$nombre_adulto_mayor_acudiente')";
$sql7="UPDATE ficha_funcionario (nombre_funcionario, numero_identificacion_funcionario, cargo, registro_profesional) SET ('$nombre_funcionario','$numero_identificacion_funcionario','$cargo','$registro_profesional')";

//$query= mysqli_query($con,$sql);

if($base->query($sql)){
    Header("Location: Ficha.html");
?>

