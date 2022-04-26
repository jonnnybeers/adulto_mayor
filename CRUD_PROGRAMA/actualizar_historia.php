<?php 
    include("conexion.php");

//$con=conectar();

$numero_identificacion= $_GET['id'];

$cmt=$base->query("SELECT * FROM pacientes where numero_identificacion = '".$numero_identificacion."'");

//$sql="SELECT * FROM pacientes WHERE NUMERO_DE_IDENTIFICACION='$NUMERO_DE_IDENTIFICACION'";


//$query=mysqli_query($sql);

$row = $cmt->fetch()
//$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                   
                    <form action="update_historia.php" method="POST">
                                
                                
                                <input type="text" class="form-control mb-3" name="fecha_apertura" placeholder="fecha_apertura" value="<?php echo $row['fecha_apertura']  ?>">
                                <input type="text" class="form-control mb-3" name="nombres_apellidos" placeholder="nombres_apellidos" value="<?php echo $row['nombres_apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="fecha_nacimiento" placeholder="fecha_nacimiento" value="<?php echo $row['fecha_nacimiento']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion_residencial" placeholder="direccion_residencial" value="<?php echo $row['direccion_residencial']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono" value="<?php echo $row['telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="numero_identificacion" placeholder="numero_identificacion" value="<?php echo $row['numero_identificacion']  ?>">
                                <input type="text" class="form-control mb-3" name="edad" placeholder="edad" value="<?php echo $row['edad']  ?>">
                                <input type="text" class="form-control mb-3" name="sexo" placeholder="sexo" value="<?php echo $row['sexo']  ?>">
                                <input type="text" class="form-control mb-3" name="estado_civil" placeholder="estado_civil" value="<?php echo $row['estado_civil']  ?>">
                                <input type="text" class="form-control mb-3" name="grado_escolaridad" placeholder="grado_escolaridad" value="<?php echo $row['grado_escolaridad']  ?>">

                                <input type="text" class="form-control mb-3" name="grupo_sisben" placeholder="grupo_sisben" value="<?php echo $row['grupo_sisben']  ?>">
                                <input type="text" class="form-control mb-3" name="eps" placeholder="eps" value="<?php echo $row['eps']  ?>">
                                <input type="text" class="form-control mb-3" name="regimen_actual" placeholder="regimen_actual" value="<?php echo $row['regimen_actual']  ?>">
                                <input type="text" class="form-control mb-3" name="fecha_ingreso" placeholder="fecha_ingreso" value="<?php echo $row['fecha_ingreso']  ?>">
                                <input type="text" class="form-control mb-3" name="motivo_ingreso" placeholder="motivo_ingreso" value="<?php echo $row['motivo_ingreso']  ?>">
                                <input type="text" class="form-control mb-3" name="consume_alcohol" placeholder="consume_alcohol" value="<?php echo $row['consume_alcohol']  ?>">
                                <input type="text" class="form-control mb-3" name="hace_cuanto_consume_alcohol" placeholder="hace_cuanto_consume_alcohol" value="<?php echo $row['hace_cuanto_consume_alcohol']  ?>">
                                <input type="text" class="form-control mb-3" name="fumador" placeholder="fumador" value="<?php echo $row['fumador']  ?>">
                                <input type="text" class="form-control mb-3" name="hace_cuanto_fuma" placeholder="hace_cuanto_fuma" value="<?php echo $row['hace_cuanto_fuma']  ?>">
                                <input type="text" class="form-control mb-3" name="consume_drogas" placeholder="consume_drogas" value="<?php echo $row['consume_drogas']  ?>">

                                <input type="text" class="form-control mb-3" name="hace_cuanto_consume_drogas" placeholder="hace_cuanto_consume_drogas" value="<?php echo $row['hace_cuanto_consume_drogas']  ?>">
                                <input type="text" class="form-control mb-3" name="tipo_droga" placeholder="tipo_droga" value="<?php echo $row['tipo_droga']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre_acudiente" placeholder="nombre_acudiente" value="<?php echo $row['nombre_acudiente']  ?>">
                                <input type="text" class="form-control mb-3" name="parentesco_acudiente" placeholder="parentesco_acudiente" value="<?php echo $row['parentesco_acudiente']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion_acudiente" placeholder="direccion_acudiente" value="<?php echo $row['direccion_acudiente']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono_acudiente" placeholder="telefono_acudiente" value="<?php echo $row['telefono_acudiente']  ?>">
                                <input type="text" class="form-control mb-3" name="cataratas" placeholder="cataratas" value="<?php echo $row['cataratas']  ?>">
                                <input type="text" class="form-control mb-3" name="pterigios" placeholder="pterigios" value="<?php echo $row['pterigios']  ?>">
                                <input type="text" class="form-control mb-3" name="lentes" placeholder="lentes" value="<?php echo $row['lentes']  ?>">
                                <input type="text" class="form-control mb-3" name="parpados" placeholder="parpados" value="<?php echo $row['parpados']  ?>">

                                <input type="text" class="form-control mb-3" name="dentadura" placeholder="dentadura" value="<?php echo $row['dentadura']  ?>">
                                <input type="text" class="form-control mb-3" name="protesis" placeholder="protesis" value="<?php echo $row['protesis']  ?>">
                                <input type="text" class="form-control mb-3" name="protesis_total" placeholder="protesis_total" value="<?php echo $row['protesis_total']  ?>">
                                <input type="text" class="form-control mb-3" name="protesis_parcial" placeholder="protesis_parcial" value="<?php echo $row['protesis_parcial']  ?>">
                                <input type="text" class="form-control mb-3" name="dientes_naturales" placeholder="dientes_naturales" value="<?php echo $row['dientes_naturales']  ?>">
                                <input type="text" class="form-control mb-3" name="deficiencia" placeholder="deficiencia" value="<?php echo $row['deficiencia']  ?>">
                                <input type="text" class="form-control mb-3" name="alergias" placeholder="alergias" value="<?php echo $row['alergias']  ?>">
                                <input type="text" class="form-control mb-3" name="tipo_alergias" placeholder="tipo_alergias" value="<?php echo $row['tipo_alergias']  ?>">
                                <input type="text" class="form-control mb-3" name="resequedad" placeholder="resequedad" value="<?php echo $row['resequedad']  ?>">
                                <input type="text" class="form-control mb-3" name="lesiones" placeholder="lesiones" value="<?php echo $row['lesiones']  ?>">
                                <input type="text" class="form-control mb-3" name="alteraciones_unas" placeholder="alteraciones_unas" value="<?php echo $row['alteraciones_unas']  ?>">
                                <input type="text" class="form-control mb-3" name="hongos" placeholder="hongos" value="<?php echo $row['hongos']  ?>">
                                <input type="text" class="form-control mb-3" name="cambio_color" placeholder="cambio_color" value="<?php echo $row['cambio_color']  ?>">
                                <input type="text" class="form-control mb-3" name="disminucion_muscular" placeholder="disminucion_muscular" value="<?php echo $row['disminucion_muscular']  ?>">
                                <input type="text" class="form-control mb-3" name="paralisis_algun_lado_del_cuerpo" placeholder="paralisis_algun_lado_del_cuerpo" value="<?php echo $row['paralisis_algun_lado_del_cuerpo']  ?>">
                                <input type="text" class="form-control mb-3" name="fecha" placeholder="fecha" value="<?php echo $row['fecha']  ?>">
                                <input type="text" class="form-control mb-3" name="peso" placeholder="peso" value="<?php echo $row['peso']  ?>">
                                <input type="text" class="form-control mb-3" name="talla" placeholder="talla" value="<?php echo $row['talla']  ?>">
                                <input type="text" class="form-control mb-3" name="pe" placeholder="pe" value="<?php echo $row['pe']  ?>">
                                <input type="text" class="form-control mb-3" name="te" placeholder="te" value="<?php echo $row['te']  ?>">
                                <input type="text" class="form-control mb-3" name="imc" placeholder="imc" value="<?php echo $row['imc']  ?>">
                                <input type="text" class="form-control mb-3" name="analis" placeholder="analis" value="<?php echo $row['analis']  ?>">
                                <input type="text" class="form-control mb-3" name="te2" placeholder="te2" value="<?php echo $row['te2']  ?>">
                                <input type="text" class="form-control mb-3" name="apariencia_fisica" placeholder="apariencia_fisica" value="<?php echo $row['apariencia_fisica']  ?>">
                                <input type="text" class="form-control mb-3" name="presentacion_personal" placeholder="presentacion_personal" value="<?php echo $row['presentacion_personal']  ?>">
                                <input type="text" class="form-control mb-3" name="actitud_entrevista" placeholder="actitud_entrevista" value="<?php echo $row['actitud_entrevista']  ?>">
                                <input type="text" class="form-control mb-3" name="memoria_presente" placeholder="memoria_presente" value="<?php echo $row['memoria_presente']  ?>">
                                <input type="text" class="form-control mb-3" name="memoria_pasada" placeholder="memoria_pasada" value="<?php echo $row['memoria_pasada']  ?>">
                                <input type="text" class="form-control mb-3" name="atencion" placeholder="atencion" value="<?php echo $row['atencion']  ?>">
                                <input type="text" class="form-control mb-3" name="lectoescritura" placeholder="lectoescritura" value="<?php echo $row['lectoescritura']  ?>">
                                <input type="text" class="form-control mb-3" name="lenguaje_hablado" placeholder="lenguaje_hablado" value="<?php echo $row['lenguaje_hablado']  ?>">
                                <input type="text" class="form-control mb-3" name="curso_pensamiento" placeholder="curso_pensamiento" value="<?php echo $row['curso_pensamiento']  ?>">
                                <input type="text" class="form-control mb-3" name="razonamiento" placeholder="razonamiento" value="<?php echo $row['razonamiento']  ?>">
                                <input type="text" class="form-control mb-3" name="angustia" placeholder="angustia" value="<?php echo $row['angustia']  ?>">
                                <input type="text" class="form-control mb-3" name="llanto" placeholder="llanto" value="<?php echo $row['llanto']  ?>">
                                <input type="text" class="form-control mb-3" name="manifiesta_no_institucion" placeholder="manifiesta_no_institucion" value="<?php echo $row['manifiesta_no_institucion']  ?>">

                                <input type="text" class="form-control mb-3" name="ideas_suicidas" placeholder="ideas_suicidas" value="<?php echo $row['ideas_suicidas']  ?>">
                                <input type="text" class="form-control mb-3" name="manifiesta_agresividad" placeholder="manifiesta_agresividad" value="<?php echo $row['manifiesta_agresividad']  ?>">
                                <input type="text" class="form-control mb-3" name="observa_tranquilo" placeholder="observa_tranquilo" value="<?php echo $row['observa_tranquilo']  ?>">
                                <input type="text" class="form-control mb-3" name="proyecto_vida" placeholder="proyecto_vida" value="<?php echo $row['proyecto_vida']  ?>">
                                <input type="text" class="form-control mb-3" name="espera_muerte" placeholder="espera_muerte" value="<?php echo $row['espera_muerte']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="parentesco" placeholder="parentesco" value="<?php echo $row['parentesco']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="direccion" value="<?php echo $row['direccion']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono" value="<?php echo $row['telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="hace_amigos" placeholder="hace_amigos" value="<?php echo $row['hace_amigos']  ?>">
                                <input type="text" class="form-control mb-3" name="pertenece_grupos" placeholder="pertenece_grupos" value="<?php echo $row['pertenece_grupos']  ?>">
                                <input type="text" class="form-control mb-3" name="maneja_relaciones" placeholder="maneja_relaciones" value="<?php echo $row['maneja_relaciones']  ?>">
                                <input type="text" class="form-control mb-3" name="manifiesta_preocupaciones" placeholder="manifiesta_preocupaciones" value="<?php echo $row['manifiesta_preocupaciones']  ?>">
                                <input type="text" class="form-control mb-3" name="facilidad_comunicarse" placeholder="facilidad_comunicarse" value="<?php echo $row['facilidad_comunicarse']  ?>">
                                <input type="text" class="form-control mb-3" name="religiosos" placeholder="religiosos" value="<?php echo $row['religiosos']  ?>">
                                <input type="text" class="form-control mb-3" name="cultural" placeholder="cultural" value="<?php echo $row['cultural']  ?>">

                                <input type="text" class="form-control mb-3" name="intelectual_cientifico" placeholder="intelectual_cientifico" value="<?php echo $row['intelectual_cientifico']  ?>">
                                <input type="text" class="form-control mb-3" name="manuales" placeholder="manuales" value="<?php echo $row['manuales']  ?>">
                                <input type="text" class="form-control mb-3" name="actitudes" placeholder="actitudes" value="<?php echo $row['actitudes']  ?>">
                                <input type="text" class="form-control mb-3" name="dibujo" placeholder="dibujo" value="<?php echo $row['dibujo']  ?>">
                                <input type="text" class="form-control mb-3" name="pintar" placeholder="pintar" value="<?php echo $row['pintar']  ?>">
                                <input type="text" class="form-control mb-3" name="danzar" placeholder="danzar" value="<?php echo $row['danzar']  ?>">
                                <input type="text" class="form-control mb-3" name="bailar" placeholder="bailar" value="<?php echo $row['bailar']  ?>">
                                <input type="text" class="form-control mb-3" name="teatro" placeholder="teatro" value="<?php echo $row['teatro']  ?>">
                                <input type="text" class="form-control mb-3" name="poesia" placeholder="poesia" value="<?php echo $row['poesia']  ?>">
                                <input type="text" class="form-control mb-3" name="canto" placeholder="canto" value="<?php echo $row['canto']  ?>">
                                <input type="text" class="form-control mb-3" name="escritura" placeholder="escritura" value="<?php echo $row['escritura']  ?>">
                                <input type="text" class="form-control mb-3" name="deportivas" placeholder="deportivas" value="<?php echo $row['deportivas']  ?>">
                                <input type="text" class="form-control mb-3" name="liderazgo" placeholder="liderazgo" value="<?php echo $row['liderazgo']  ?>">
                                <input type="text" class="form-control mb-3" name="humanisticas" placeholder="humanisticas" value="<?php echo $row['facilidad_comunicarse']  ?>">
                                <input type="text" class="form-control mb-3" name="intervencion_gerontologica" placeholder="intervencion_gerontologica" value="<?php echo $row['intervencion_gerontologica']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre_funcionario" placeholder="nombre_funcionario" value="<?php echo $row['nombre_funcionario'] ?>">

                                <input type="text" class="form-control mb-3" name="numero_identificacion_funcionario" placeholder="numero_identificacion_funcionario" value="<?php echo $row['numero_identificacion_funcionario']  ?>">
                                
                                 <input type="text" class="form-control mb-3" name="cargo" placeholder="cargo" value="<?php echo $row['cargo']  ?>">
                                <input type="text" class="form-control mb-3" name="registro_profesional" placeholder="registro_profesional" value="<?php echo $row['registro_profesional'] ?>">
                                <input type="text" class="form-control mb-3" name="aprobada_por" placeholder="aprobada_por" value="<?php echo $row['aprobada_por'] ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">


