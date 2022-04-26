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
                   
                    <form action="update_mental.php" method="POST">
                                
                               
                                <input type="text" class="form-control mb-3" name="nombre_usuario" placeholder="nombre_usuario" value="<?php echo $row['nombre_usuario']  ?>">
                                <input type="text" class="form-control mb-3" name="zona" placeholder="zona" value="<?php echo $row['zona']  ?>">
                                <input type="text" class="form-control mb-3" name="distrito" placeholder="distrito" value="<?php echo $row['distrito']  ?>">
                                <input type="text" class="form-control mb-3" name="modalidad_atencion" placeholder="modalidad_atencion" value="<?php echo $row['modalidad_atencion']  ?>">
                                <input type="text" class="form-control mb-3" name="lugar_atencion" placeholder="lugar_atencion" value="<?php echo $row['lugar_atencion']  ?>">
                                <input type="text" class="form-control mb-3" name="edad_anual" placeholder="edad_anual" value="<?php echo $row['edad_anual']  ?>">
                                <input type="text" class="form-control mb-3" name="edad_meses" placeholder="edad_meses" value="<?php echo $row['edad_meses']  ?>">
                                <input type="text" class="form-control mb-3" name="fecha_aplicacion" placeholder="fecha_aplicacion" value="<?php echo $row['fecha_aplicacion']  ?>">
                                <input type="text" class="form-control mb-3" name="aplicado_por" placeholder="aplicado_por" value="<?php echo $row['aplicado_por']  ?>">
                                <input type="text" class="form-control mb-3" name="dia_estamos" placeholder="dia_estamos" value="<?php echo $row['dia_estamos']  ?>">
                                <input type="text" class="form-control mb-3" name="mes_estamos" placeholder="mes_estamos" value="<?php echo $row['mes_estamos']  ?>">
                                <input type="text" class="form-control mb-3" name="ano_estamos" placeholder="ano_estamos" value="<?php echo $row['ano_estamos']  ?>">
                                <input type="text" class="form-control mb-3" name="dia_semana" placeholder="dia_semana" value="<?php echo $row['dia_semana']  ?>">
                                <input type="text" class="form-control mb-3" name="hora_estamos" placeholder="hora_estamos" value="<?php echo $row['hora_estamos']  ?>">
                                <input type="text" class="form-control mb-3" name="puntuacion_uno" placeholder="puntuacion_uno" value="<?php echo $row['puntuacion_uno']  ?>">
                                <input type="text" class="form-control mb-3" name="dia_estamos_dos" placeholder="dia_estamos_dos" value="<?php echo $row['dia_estamos_dos']  ?>">
                                <input type="text" class="form-control mb-3" name="mes_estamos_dos" placeholder="mes_estamos_dos" value="<?php echo $row['mes_estamos_dos']  ?>">
                                <input type="text" class="form-control mb-3" name="ano_estamos_dos" placeholder="ano_estamos_dos" value="<?php echo $row['ano_estamos_dos']  ?>">
                                <input type="text" class="form-control mb-3" name="dia_semana_dos" placeholder="dia_semana_dos" value="<?php echo $row['dia_semana_dos']  ?>">
                                <input type="text" class="form-control mb-3" name="hora_estamos_dos" placeholder="hora_estamos_dos" value="<?php echo $row['hora_estamos_dos']  ?>">
                                <input type="text" class="form-control mb-3" name="puntuacion_dos" placeholder="puntuacion_dos" value="<?php echo $row['puntuacion_dos']  ?>">
                                <input type="text" class="form-control mb-3" name="lugar_estamos" placeholder="lugar_estamos" value="<?php echo $row['lugar_estamos']  ?>">
                                <input type="text" class="form-control mb-3" name="departamento_estamos" placeholder="departamento_estamos" value="<?php echo $row['departamento_estamos']  ?>">
                                <input type="text" class="form-control mb-3" name="barrio_actual" placeholder="barrio_actual" value="<?php echo $row['barrio_actual']  ?>">
                                 <input type="text" class="form-control mb-3" name="ciudad_estamos" placeholder="ciudad_estamos" value="<?php echo $row['ciudad_estamos']  ?>">

                                <input type="text" class="form-control mb-3" name="pais_estamos" placeholder="pais_estamos" value="<?php echo $row['pais_estamos']  ?>">
                                <input type="text" class="form-control mb-3" name="puntuacion_tres" placeholder="puntuacion_tres" value="<?php echo $row['puntuacion_tres']  ?>">
                                <input type="text" class="form-control mb-3" name="repeticion_ensayo" placeholder="repeticion_ensayo" value="<?php echo $row['repeticion_ensayo']  ?>">
                                <input type="text" class="form-control mb-3" name="papel" placeholder="papel" value="<?php echo $row['papel']  ?>">
                                <input type="text" class="form-control mb-3" name="bicicleta" placeholder="bicicleta" value="<?php echo $row['bicicleta']  ?>">
                                <input type="text" class="form-control mb-3" name="cuchara" placeholder="cuchara" value="<?php echo $row['cuchara']  ?>">
                                <input type="text" class="form-control mb-3" name="puntuacion_cuatro" placeholder="puntuacion_cuatro" value="<?php echo $row['puntuacion_cuatro']  ?>">
                                <input type="text" class="form-control mb-3" name="uno" placeholder="uno" value="<?php echo $row['uno']  ?>">
                                <input type="text" class="form-control mb-3" name="dos" placeholder="dos" value="<?php echo $row['dos']  ?>">
                                <input type="text" class="form-control mb-3" name="tres" placeholder="tres" value="<?php echo $row['tres']  ?>">
                                <input type="text" class="form-control mb-3" name="cuatro" placeholder="cuatro" value="<?php echo $row['cuatro']  ?>">
                                <input type="text" class="form-control mb-3" name="cinco" placeholder="cinco" value="<?php echo $row['cinco']  ?>">
                                <input type="text" class="form-control mb-3" name="puntuacion_cinco" placeholder="puntuacion_cinco" value="<?php echo $row['puntuacion_cinco']  ?>">
                                <input type="text" class="form-control mb-3" name="papel_uno" placeholder="papel_uno" value="<?php echo $row['papel_uno']  ?>">
                                 <input type="text" class="form-control mb-3" name="bicicleta_dos" placeholder="bicicleta_dos" value="<?php echo $row['bicicleta_dos']  ?>">

                                 <input type="text" class="form-control mb-3" name="cuchara_tres" placeholder="cuchara_tres" value="<?php echo $row['cuchara_tres']  ?>">
                                <input type="text" class="form-control mb-3" name="puntuacion_seis" placeholder="puntuacion_seis" value="<?php echo $row['puntuacion_seis']  ?>">
                                <input type="text" class="form-control mb-3" name="mostrarle_lapiz" placeholder="mostrarle_lapiz" value="<?php echo $row['mostrarle_lapiz']  ?>">
                                <input type="text" class="form-control mb-3" name="mostrarle_reloj" placeholder="mostrarle_reloj" value="<?php echo $row['mostrarle_reloj']  ?>">
                                <input type="text" class="form-control mb-3" name="puntuacion_siete" placeholder="puntuacion_siete" value="<?php echo $row['puntuacion_siete']  ?>">
                                <input type="text" class="form-control mb-3" name="consigna" placeholder="consigna" value="<?php echo $row['consigna']  ?>">
                                <input type="text" class="form-control mb-3" name="puntuacion_ocho" placeholder="puntuacion_ocho" value="<?php echo $row['puntuacion_ocho']  ?>">
                                <input type="text" class="form-control mb-3" name="comprension_ejecucion" placeholder="comprension_ejecucion" value="<?php echo $row['comprension_ejecucion']  ?>">
                                <input type="text" class="form-control mb-3" name="doblar_mitad" placeholder="doblar_mitad" value="<?php echo $row['doblar_mitad']  ?>">
                                <input type="text" class="form-control mb-3" name="dejelo_suelo" placeholder="dejelo_suelo" value="<?php echo $row['dejelo_suelo']  ?>">
                                <input type="text" class="form-control mb-3" name="puntuacion_nueve" placeholder="puntuacion_nueve" value="<?php echo $row['puntuacion_nueve']  ?>">
                                <input type="text" class="form-control mb-3" name="escriba_frase" placeholder="escriba_frase" value="<?php echo $row['escriba_frase']  ?>">
                                <input type="text" class="form-control mb-3" name="puntuacion_once" placeholder="puntuacion_once" value="<?php echo $row['puntuacion_once']  ?>">
                                <input type="text" class="form-control mb-3" name="copie_dibujo" placeholder="copie_dibujo" value="<?php echo $row['copie_dibujo']  ?>">
                                 <input type="text" class="form-control mb-3" name="puntuacion_doce" placeholder="puntuacion_doce" value="<?php echo $row['puntuacion_doce']  ?>">
                                 <input type="text" class="form-control mb-3" name="puntuacion_total" placeholder="puntuacion_total" value="<?php echo $row['puntuacion_total']  ?>">
                               <input type="text" class="form-control mb-3" name="nombre_funcionario" placeholder="nombre_funcionario" value="<?php echo $row['nombre_funcionario'] ?>">
                                <input type="text" class="form-control mb-3" name="numero_identificacion_funcionario" placeholder="numero_identificacion_funcionario" value="<?php echo $row['numero_identificacion_funcionario']  ?>">
                                 <input type="text" class="form-control mb-3" name="cargo" placeholder="cargo" value="<?php echo $row['cargo']  ?>">
                                <input type="text" class="form-control mb-3" name="registro_profesional" placeholder="registro_profesional" value="<?php echo $row['registro_profesional'] ?>">

                                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
