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
                   
                    <form action="update_lawtonybrody.php" method="POST">
                                
                               
                                <input type="text" class="form-control mb-3" name="nombre_adulto" placeholder="nombre_adulto" value="<?php echo $row['nombre_adulto']  ?>">
                                <input type="text" class="form-control mb-3" name="zona" placeholder="zona" value="<?php echo $row['zona']  ?>">
                                <input type="text" class="form-control mb-3" name="distrito" placeholder="distrito" value="<?php echo $row['distrito']  ?>">
                                <input type="text" class="form-control mb-3" name="modalidad_atencion" placeholder="modalidad_atencion" value="<?php echo $row['modalidad_atencion']  ?>">
                                <input type="text" class="form-control mb-3" name="lugar_atencion" placeholder="lugar_atencion" value="<?php echo $row['lugar_atencion']  ?>">
                                <input type="text" class="form-control mb-3" name="edad_anual" placeholder="edad_anual" value="<?php echo $row['edad_anual']  ?>">
                                <input type="text" class="form-control mb-3" name="edad_meses" placeholder="edad_meses" value="<?php echo $row['edad_meses']  ?>">
                                <input type="text" class="form-control mb-3" name="fecha_aplicacion" placeholder="fecha_aplicacion" value="<?php echo $row['fecha_aplicacion']  ?>">
                                <input type="text" class="form-control mb-3" name="aplicado_por" placeholder="aplicado_por" value="<?php echo $row['aplicado_por']  ?>">

                                 <input type="text" class="form-control mb-3" name="capacidad_telefono" placeholder="capacidad_telefono" value="<?php echo $row['capacidad_telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="marcar_numeros" placeholder="marcar_numeros" value="<?php echo $row['marcar_numeros']  ?>">
                                <input type="text" class="form-control mb-3" name="contestar_telefono" placeholder="contestar_telefono" value="<?php echo $row['contestar_telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="total_uno" placeholder="total_uno" value="<?php echo $row['total_uno']  ?>">
                                <input type="text" class="form-control mb-3" name="realiza_compras_necesarias" placeholder="realiza_compras_necesarias" value="<?php echo $row['realiza_compras_necesarias']  ?>">
                                <input type="text" class="form-control mb-3" name="compras_independiente" placeholder="compras_independiente" value="<?php echo $row['compras_independiente']  ?>">
                                <input type="text" class="form-control mb-3" name="acompanado_compra" placeholder="acompanado_compra" value="<?php echo $row['acompanado_compra']  ?>">
                                <input type="text" class="form-control mb-3" name="incapaz_comprar" placeholder="incapaz_comprar" value="<?php echo $row['incapaz_comprar']  ?>">
                                <input type="text" class="form-control mb-3" name="total_dos" placeholder="total_dos" value="<?php echo $row['total_dos']  ?>">
                                <input type="text" class="form-control mb-3" name="organiza_comida" placeholder="organiza_comida" value="<?php echo $row['organiza_comida']  ?>">
                                <input type="text" class="form-control mb-3" name="adecuadamente_comida" placeholder="adecuadamente_comida" value="<?php echo $row['adecuadamente_comida']  ?>">
                                <input type="text" class="form-control mb-3" name="sirve_comida" placeholder="sirve_comida" value="<?php echo $row['sirve_comida']  ?>">
                                <input type="text" class="form-control mb-3" name="necesita_comida" placeholder="necesita_comida" value="<?php echo $row['necesita_comida']  ?>">
                                <input type="text" class="form-control mb-3" name="total_tres" placeholder="total_tres" value="<?php echo $row['total_tres']  ?>">
                                 <input type="text" class="form-control mb-3" name="mantiene_casa_solo" placeholder="mantiene_casa_solo" value="<?php echo $row['mantiene_casa_solo']  ?>">
                                 <input type="text" class="form-control mb-3" name="realiza_tareas_ligeras" placeholder="realiza_tareas_ligeras" value="<?php echo $row['realiza_tareas_ligeras']  ?>">

                                 <input type="text" class="form-control mb-3" name="nivel_bajo_limpieza" placeholder="nivel_bajo_limpieza" value="<?php echo $row['nivel_bajo_limpieza']  ?>">
                                <input type="text" class="form-control mb-3" name="ayuda_labores" placeholder="ayuda_labores" value="<?php echo $row['ayuda_labores']  ?>">
                                <input type="text" class="form-control mb-3" name="no_labora_casa" placeholder="no_labora_casa" value="<?php echo $row['no_labora_casa']  ?>">
                                <input type="text" class="form-control mb-3" name="total_cuatro" placeholder="total_cuatro" value="<?php echo $row['total_cuatro']  ?>">
                                <input type="text" class="form-control mb-3" name="lava_ropa" placeholder="lava_ropa" value="<?php echo $row['lava_ropa']  ?>">
                                <input type="text" class="form-control mb-3" name="lava_pequenas_prendas" placeholder="lava_pequenas_prendas" value="<?php echo $row['lava_pequenas_prendas']  ?>">
                                <input type="text" class="form-control mb-3" name="lava_otro" placeholder="lava_otro" value="<?php echo $row['lava_otro']  ?>">
                                <input type="text" class="form-control mb-3" name="total_cinco" placeholder="total_cinco" value="<?php echo $row['total_cinco']  ?>">
                                <input type="text" class="form-control mb-3" name="viaja_solo" placeholder="viaja_solo" value="<?php echo $row['viaja_solo']  ?>">
                                <input type="text" class="form-control mb-3" name="coge_taxi" placeholder="coge_taxi" value="<?php echo $row['coge_taxi']  ?>">
                                <input type="text" class="form-control mb-3" name="transporte_publico" placeholder="transporte_publico" value="<?php echo $row['transporte_publico']  ?>">
                                <input type="text" class="form-control mb-3" name="utiliza_automovil" placeholder="utiliza_automovil" value="<?php echo $row['utiliza_automovil']  ?>">
                                <input type="text" class="form-control mb-3" name="no_viaja" placeholder="no_viaja" value="<?php echo $row['no_viaja']  ?>">
                                <input type="text" class="form-control mb-3" name="total_seis" placeholder="total_seis" value="<?php echo $row['total_seis']  ?>">
                                 <input type="text" class="form-control mb-3" name="medicacion_solo" placeholder="medicacion_solo" value="<?php echo $row['medicacion_solo']  ?>">
                                 <input type="text" class="form-control mb-3" name="medicacion_previa" placeholder="medicacion_previa" value="<?php echo $row['medicacion_previa']  ?>"> 

                                <input type="text" class="form-control mb-3" name="no_administra_medicacion" placeholder="no_administra_medicacion" value="<?php echo $row['no_administra_medicacion']  ?>">
                                <input type="text" class="form-control mb-3" name="total_siete" placeholder="total_siete" value="<?php echo $row['total_siete']  ?>">
                                <input type="text" class="form-control mb-3" name="economicos_solo" placeholder="economicos_solo" value="<?php echo $row['economicos_solo']  ?>">
                                <input type="text" class="form-control mb-3" name="compras_ayuda" placeholder="compras_ayuda" value="<?php echo $row['compras_ayuda']  ?>">
                                <input type="text" class="form-control mb-3" name="economicos_ayuda" placeholder="economicos_ayuda" value="<?php echo $row['economicos_ayuda']  ?>">
                                <input type="text" class="form-control mb-3" name="total_ocho" placeholder="total_ocho" value="<?php echo $row['total_ocho']  ?>">
                               <input type="text" class="form-control mb-3" name="nombre_funcionario" placeholder="nombre_funcionario" value="<?php echo $row['nombre_funcionario'] ?>">
                                <input type="text" class="form-control mb-3" name="numero_identificacion_funcionario" placeholder="numero_identificacion_funcionario" value="<?php echo $row['numero_identificacion_funcionario']  ?>">
                                 <input type="text" class="form-control mb-3" name="cargo" placeholder="cargo" value="<?php echo $row['cargo']  ?>">
                                <input type="text" class="form-control mb-3" name="registro_profesional" placeholder="registro_profesional" value="<?php echo $row['registro_profesional'] ?>">

                                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">


