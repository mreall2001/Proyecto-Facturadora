<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<title>Resumen Factura</title>
</head>
<body>
<?php
include "includes/db.php";
?>
<?php
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $stm = $db->prepare("SELECT * FROM facturas where id_factura=?");
  $stm->bindParam(1, $id);
  $res = $stm->execute();
}
?>
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Resumen de la Factura</th>
    </tr>
  </thead>
<?php
  while ($row = $res->fetchArray()) {
?>
  <tbody>
<?php
  echo '<tr>';
  echo '<th>Id Factura<th>';
    echo "<td> {$row['id_factura']}</td>";
  echo '</tr>';
  echo '<tr>';
  echo '<th>Fecha<th>';
    echo "<td> {$row['fecha']}</td>";
  echo '</tr>';
  echo '<tr>';
  echo '<th>Nombre Cliente<th>';
    echo "<td> {$row['nom_cliente']}</td>";
  echo '</tr>';
  echo '<tr>';
  echo '<th>Apellidos Cliente<th>';
    echo "<td> {$row['apellidos_cliente']}</td>";
  echo '</tr>';
  echo '<tr>';
  echo '<th>Dirección Cliente<th>';
    echo "<td> {$row['direccion_cliente']}</td>";
  echo '</tr>';
  echo '<th>Población Cliente<th>';
    echo "<td> {$row['poblacion_cliente']}</td>";
  echo '</tr>';
  echo '<th>Provincia Cliente<th>';
    echo "<td> {$row['provincia_cliente']}</td>";
  echo '</tr>';
  echo '<th>C.P Cliente<th>';
    echo "<td> {$row['cdcliente']}</td>";
  echo '</tr>';
  echo '<th>Identificación Fiscal<th>';
    echo "<td> {$row['identicliente']}</td>";
  echo '</tr>';
  echo '<th>Concepto<th>';
    echo "<td> {$row['producto']}</td>";
  echo '</tr>';

?> 
  </tbody>
  </table>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">*****</th>
      </tr>
    </thead>
    <tbody>
<?php
echo '<tr>';
echo '<th >Importe<th>';
  echo "<td> {$row['importe']}</td>";
echo '</tr>';
echo '<tr>';
    echo '<th>IVA<th>';
    echo "<td> {$row['iva']}</td>";
  echo '</tr>';
  }
}
?>
  </tbody>
  </table>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>