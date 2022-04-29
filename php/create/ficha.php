<?php

include("../includes/conexion.php");
$id0 = 0;
$nombre_programa = $_POST['nombre_programa'];
$vigencia = $_POST['vigencia'];
$fecha_digilenciamiento = $_POST['fecha_digilenciamiento'];
$tipo_identificacion = $_POST['tipo_identificacion'];
$numero_identificacion = $_POST['numero_identificacion'];
$fecha_expedicion = $_POST['fecha_expedicion'];
$dpto_municipio_expedicion = $_POST['dpto_municipio_expedicion'];
$nombres = $_POST['nombres'];
$primer_apellido = $_POST['primer_apellido'];
$segundo_apellido = $_POST['segundo_apellido'];
$edad = $_POST['edad'];
$direccion_residencial = $_POST['direccion_residencial'];
$departamento = $_POST['departamento'];
$municipio = $_POST['municipio'];
$barrio_vereda_AM = $_POST['barrio_vereda_AM'];
$telefono_AM = $_POST['telefono_AM'];
$celular_AM = $_POST['celular_AM'];
$nombre_familiar_acudiente = $_POST['nombre_familiar_acudiente'];
$nombres_apellidos = $_POST['nombres_apellidos'];
$parentesco = $_POST['parentesco'];
$direccion_domicilio = $_POST['direccion_domicilio'];
$telefono_FAM = $_POST['telefono_FAM'];
$barrio_vereda_FAM = $_POST['barrio_vereda_FAM'];
$celular_FAM = $_POST['celular_FAM'];
$observaciones = $_POST['observaciones'];
$regimen_afiliacion = $_POST['regimen_afiliacion'];
$eps = $_POST['eps'];
$afiliado = $_POST['afiliado'];
$diagnostico_medico = $_POST['diagnostico_medico'];
$entidad_certifica = $_POST['entidad_certifica'];
$observaciones_medicas = $_POST['observaciones_medicas'];
$compromisos_condiciones = $_POST['compromisos_condiciones'];
$nombre_adulto_mayor_acudiente = $_POST['nombre_adulto_mayor_acudiente'];
$nombre_funcionario = $_POST['nombre_funcionario'];
$numero_identificacion_funcionario = $_POST['numero_identificacion_funcionario'];
$cargo = $_POST['cargo'];
$registro_profesional = $_POST['registro_profesional'];


$sql = "INSERT INTO `ficha_programa`(`id_ficha_programa`, `nombre_programa`, `vigencia`, `fecha_digilenciamiento`) VALUES ('$id0','$nombre_programa','$vigencia','$fecha_digilenciamiento')";
$base->query($sql);

$ultimoId = $base->query('SELECT MAX(id_ficha_programa) FROM `ficha_programa`');
$id = $ultimoId->fetchAll()[0]["MAX(id_ficha_programa)"];

$sql2 = "INSERT INTO `ficha_datos_adulto_mayor`(`numero_identificacion`, `tipo_identificacion`, `fecha_expedicion`, `dpto_municipio_expedicion`, `nombres`, `primer_apellido`, `segundo_apellido`, `edad`, `id_ficha_programa`) VALUES ('$numero_identificacion','$tipo_identificacion','$fecha_expedicion','$dpto_municipio_expedicion','$nombres','$primer_apellido','$segundo_apellido','$edad','$id')";
$sql3 = "INSERT INTO `ficha_datos_ubicacion_contacto_adulto_mayor`(`id_ficha_datos_ubicacion_contacto_adulto_mayor`, `direccion_residencial`, `departamento`, `municipio`, `barrio_vereda`, `telefono`, `celular`, `nombre_familiar_acudiente`, `numero_identificacion`) VALUES ('$id0','$direccion_residencial','$departamento','$municipio','$barrio_vereda_AM','$telefono_AM','$celular_AM','$nombre_familiar_acudiente','$numero_identificacion')";
$sql4 = "INSERT INTO `ficha_datos_familiar_acudiente_adulto_mayor`(`id_ficha_datos_familiar_acudiente_adulto_mayor`, `nombres_apellidos`, `parentesco`, `direccion_domicilio`, `telefono`, `barrio_vereda`, `celular`, `observaciones`, `numero_identificacion`) VALUES ('$id0','$nombres_apellidos','$parentesco','$direccion_domicilio','$telefono_FAM','$barrio_vereda_FAM','$celular_FAM','$observaciones','$numero_identificacion')";
$sql5 = "INSERT INTO `ficha_informacion_salud_adulto_mayor`(`id_ficha_informacion_salud_adulto_mayor`, `regimen_afiliacion`, `eps`, `afiliado`, `diagnostico_medico`, `entidad_certifica`, `observaciones_medicas`, `numero_identificacion`) VALUES ('$id0','$regimen_afiliacion','$eps','$afiliado','$diagnostico_medico','$entidad_certifica','$observaciones_medicas','$numero_identificacion')";
$sql6 = "INSERT INTO `ficha_compromiso_condiciones_especificas_adulto_mayor`(`id_ficha_compromiso_condiciones_especificas_adulto_mayor`, `compromisos_condiciones`, `nombre_adulto_mayor_acudiente`, `numero_identificacion`) VALUES ('$id0','$compromisos_condiciones','$nombre_adulto_mayor_acudiente','$numero_identificacion')";
$sql7 = "INSERT INTO `ficha_funcionario`(`id_ficha_funcionario`, `nombre`, `cargo`, `registro_profesional`, `numero_identificacion`, `id_ficha_programa`) VALUES ('$id0','$nombre_funcionario','$cargo','$registro_profesional','$numero_identificacion_funcionario','$id')";

$base->query($sql2);
$base->query($sql3);
$base->query($sql4);
$base->query($sql5);
$base->query($sql6);
$base->query($sql7);

$_SESSION['message'] = $nombres . ' guardado exitosamente';
Header("Location: ../../views/Ficha.html");
