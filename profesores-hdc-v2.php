<?php

$registros = explode( "\n", file_get_contents( 'CSV_inscripciones-parciales-para-probar.csv' ) );
$campos = str_getcsv( array_shift( $registros ) );
$datos = [];
foreach ( $registros as $registro ) {
	$fila = array();
	foreach ( str_getcsv( $registro ) as $indice => $campo )
		$fila[ $campos[ $indice ] ] = $campo;
	$fila = array_filter( $fila );
	$datos[] = $fila;
}
  $docente = "";
  if($_GET){
    $docente = $_GET["docente"];
  }
  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title></title>
  </head>
  <body>

    <div class="container-fluid ml-3 mt-3 pt-2"> <!-- Donde va todo -->
<div class="p-3 mb-2 bg-warning text-black w-75"><h2>Consulta de alumnos por docente</h2></div>
<div class="alert alert-secondary w-75" role="alert">
  <form class="form-group pt-2" action="" method="get">
    <input type="text" name="docente" value="" placeholder="Nombre del docente">
    <button type="submit" name="" class="btn btn-success">Consultar Alumnos</button>
  </form>
  <?php

  //Imprimir los estudiantes de un solo docente
  $profe = $_GET["docente"];
  echo "<b>Docente:</b> ".$profe."<br>";
// Para encontrar la escuela del docente
  for ($i=0; $i < 154; $i++) {
if (isset($datos[$i]["ConfApellidoDoc1"])  && $datos[$i]["ConfApellidoDoc1"] == $profe)
{
  if (null != $datos[$i]["ConfEscuelaDoc1"])
  {
    $escuela = $datos[$i]["ConfEscuelaDoc1"];
  }
}
else if (isset($datos[$i]["ApellidoDoc2"])  && $datos[$i]["ApellidoDoc2"] == $profe)
{
  if (null != $datos[$i]["EscuelaDoc2"])
  {
    $escuela = $datos[$i]["EscuelaDoc2"];
  }
}
  }
//end of for
if (isset($escuela)) {
  echo "<b>Escuela:</b> ".$escuela."<br>";
  echo "<hr>";
}

// FOR para ConfApellidoDoc1
  for ($i=0; $i < 154; $i++) {
  if (isset($datos[$i]["ConfApellidoDoc1"]) && $datos[$i]["ConfApellidoDoc1"] == $profe)
  {
    if (isset($datos[$i]["NomEst1"]))
    {
      echo "Estudiante 1: ".$datos[$i]["NomEst1"]." ".$datos[$i]["ApellidoEst1"].", DNI: ".$datos[$i]["DNI_Est1"].", ".$datos[$i]["RestricAlimEst1"]."<br>";
    }
    if (isset($datos[$i]["NomEst2"]))
    {
      echo "Estudiante 2: ".$datos[$i]["NomEst2"]." ".$datos[$i]["ApellidoEst2"].", DNI: ".$datos[$i]["DNI_Est2"].", ".$datos[$i]["RestricAlimEst2"]."<br>";
    }
    if (isset($datos[$i]["NomEst3"]))
    {
      echo "Estudiante 3: ".$datos[$i]["NomEst3"]." ".$datos[$i]["ApellidoEst3"].", DNI: ".$datos[$i]["DNI_Est3"].", ".$datos[$i]["RestricAlimEst3"]."<br>";
    }
    if (isset($datos[$i]["NomEst4"]))
    {
      echo "Estudiante 4: ".$datos[$i]["NomEst4"]." ".$datos[$i]["ApellidoEst4"].", DNI: ".$datos[$i]["DNI_Est4"].", ".$datos[$i]["RestricAlimEst4"]."<br>";
    }
    if (isset($datos[$i]["NomEst5"]))
    {
      echo "Estudiante 5: ".$datos[$i]["NomEst5"]." ".$datos[$i]["ApellidoEst5"].", DNI: ".$datos[$i]["DNI_Est5"].", ".$datos[$i]["RestricAlimEst5"]."<br>";
    }
    if (isset($datos[$i]["NomEst6"]))
    {
      echo "Estudiante 6: ".$datos[$i]["NomEst6"]." ".$datos[$i]["ApellidoEst6"].", DNI: ".$datos[$i]["DNI_Est6"].", ".$datos[$i]["RestricAlimEst6"]."<br>";
    }
    if (isset($datos[$i]["NomEst7"]))
    {
      echo "Estudiante 7: ".$datos[$i]["NomEst7"]." ".$datos[$i]["ApellidoEst7"].", DNI: ".$datos[$i]["DNI_Est7"].", ".$datos[$i]["RestricAlimEst7"]."<br>";
    }
    if (isset($datos[$i]["NomEst8"]))
    {
      echo "Estudiante 8: ".$datos[$i]["NomEst8"]." ".$datos[$i]["ApellidoEst8"].", DNI: ".$datos[$i]["DNI_Est8"].", ".$datos[$i]["RestricAlimEst8"]."<br>";
    }
    if (isset($datos[$i]["NomEst9"]))
    {
      echo "Estudiante 9: ".$datos[$i]["NomEst9"]." ".$datos[$i]["ApellidoEst9"].", DNI: ".$datos[$i]["DNI_Est9"].", ".$datos[$i]["RestricAlimEst9"]."<br>";
    }
    if (isset($datos[$i]["NomEst10"]))
    {
      echo "Estudiante 10: ".$datos[$i]["NomEst10"]." ".$datos[$i]["ApellidoEst10"].", DNI: ".$datos[$i]["DNI_Est10"].", ".$datos[$i]["RestricAlimEst10"]."<br>";
    }
  }

  }
//FOR para ApellidoDoc2
for ($i=0; $i < 154; $i++) {
if (isset($datos[$i]["ApellidoDoc2"]) && $datos[$i]["ApellidoDoc2"] == $profe)
{
  if (isset($datos[$i]["NomEst1"]))
  {
    echo "Estudiante 1: ".$datos[$i]["NomEst1"]." ".$datos[$i]["ApellidoEst1"].", DNI: ".$datos[$i]["DNI_Est1"].", ".$datos[$i]["RestricAlimEst1"]."<br>";
  }
  if (isset($datos[$i]["NomEst2"]))
  {
    echo "Estudiante 2: ".$datos[$i]["NomEst2"]." ".$datos[$i]["ApellidoEst2"].", DNI: ".$datos[$i]["DNI_Est2"].", ".$datos[$i]["RestricAlimEst2"]."<br>";
  }
  if (isset($datos[$i]["NomEst3"]))
  {
    echo "Estudiante 3: ".$datos[$i]["NomEst3"]." ".$datos[$i]["ApellidoEst3"].", DNI: ".$datos[$i]["DNI_Est3"].", ".$datos[$i]["RestricAlimEst3"]."<br>";
  }
  if (isset($datos[$i]["NomEst4"]))
  {
    echo "Estudiante 4: ".$datos[$i]["NomEst4"]." ".$datos[$i]["ApellidoEst4"].", DNI: ".$datos[$i]["DNI_Est4"].", ".$datos[$i]["RestricAlimEst4"]."<br>";
  }
  if (isset($datos[$i]["NomEst5"]))
  {
    echo "Estudiante 5: ".$datos[$i]["NomEst5"]." ".$datos[$i]["ApellidoEst5"].", DNI: ".$datos[$i]["DNI_Est5"].", ".$datos[$i]["RestricAlimEst5"]."<br>";
  }
  if (isset($datos[$i]["NomEst6"]))
  {
    echo "Estudiante 6: ".$datos[$i]["NomEst6"]." ".$datos[$i]["ApellidoEst6"].", DNI: ".$datos[$i]["DNI_Est6"].", ".$datos[$i]["RestricAlimEst6"]."<br>";
  }
  if (isset($datos[$i]["NomEst7"]))
  {
    echo "Estudiante 7: ".$datos[$i]["NomEst7"]." ".$datos[$i]["ApellidoEst7"].", DNI: ".$datos[$i]["DNI_Est7"].", ".$datos[$i]["RestricAlimEst7"]."<br>";
  }
  if (isset($datos[$i]["NomEst8"]))
  {
    echo "Estudiante 8: ".$datos[$i]["NomEst8"]." ".$datos[$i]["ApellidoEst8"].", DNI: ".$datos[$i]["DNI_Est8"].", ".$datos[$i]["RestricAlimEst8"]."<br>";
  }
  if (isset($datos[$i]["NomEst9"]))
  {
    echo "Estudiante 9: ".$datos[$i]["NomEst9"]." ".$datos[$i]["ApellidoEst9"].", DNI: ".$datos[$i]["DNI_Est9"].", ".$datos[$i]["RestricAlimEst9"]."<br>";
  }
  if (isset($datos[$i]["NomEst10"]))
  {
    echo "Estudiante 10: ".$datos[$i]["NomEst10"]." ".$datos[$i]["ApellidoEst10"].", DNI: ".$datos[$i]["DNI_Est10"].", ".$datos[$i]["RestricAlimEst10"]."<br>";
  }
}

}
  ?>
</div>
</div>



  </body>


</html>
