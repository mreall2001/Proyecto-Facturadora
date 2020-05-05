<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<title>Facturadora</title>
<links>
   <?php
    include "includes/cabezera.html";
   ?>
  </links>
  <style>
    body{
      background-color: white;
    }
    .importe{
      text-align: right;
    }
    .factura{
      text-align: right;
    }
    .table{
      width: 80%;
    }
    td{
      font-family: arial;
      font-size: medium;
    }
    th{
      font-family: arial;
      color: #03498c;
      font-size: medium;
    }
    .id{
      color: red;
    }
      
    
    
  </style>
</head>
<body>
  <center>
<h1>Lista de facturas<h1>
  <center>

<?php
include "includes/db.php";
?>
<?php
/* Activamos los flags para que nos muestre los errores.
Este código no debería ir en producción */
ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<?php
if(isset($_POST['enviar'])){
    echo "<h1>POST</h1>";

    $fecha = $_POST['fecha'];
    $nom_cliente = $_POST['nom_cliente'];
    $ap_cliente = $_POST['apellidos_cliente'];
    $d_cliente = $_POST['direccion_cliente'];
    $pobla_cliente = $_POST['poblacion_cliente'];
    $pro_cliente = $_POST['provincia_cliente'];
    $cd_cliente = $_POST['cdcliente'];
    $iden_cliente = $_POST['identicliente'];
    $producto = $_POST['producto'];
    $importe = $_POST['importe'];
    $iva = $_POST['iva'];
    

    $stm = $db->prepare("INSERT INTO facturas(fecha, nom_cliente, apellidos_cliente, direccion_cliente, poblacion_cliente, provincia_cliente, cdcliente, identicliente, producto, importe, iva) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stm->bindParam(1, $fecha);
    $stm->bindParam(2, $nom_cliente);
    $stm->bindParam(3, $ap_cliente);
    $stm->bindParam(4, $d_cliente);
    $stm->bindParam(5, $pobla_cliente);
    $stm->bindParam(6, $pro_cliente);
    $stm->bindParam(7, $cd_cliente);
    $stm->bindParam(8, $iden_cliente);
    $stm->bindParam(9, $producto);
    $stm->bindParam(10, $importe);
    $stm->bindParam(11, $iva);
    $stm->execute();
    $factura = $db->lastInsertRowID();
    header('Location: factura.php?id='.$factura);
  }
  else  {
      $stm = $db->prepare("SELECT * FROM facturas");
      $res = $stm->execute();
$res = $db->query('SELECT * FROM facturas');
?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Fecha</th>
      <th scope="col">Concepto</th>
      <th scope="col" class="importe">Importe</th>
      <th scope="col" class="factura">Factura</th>
    </tr>
  </thead>
<?php
while ($row = $res->fetchArray()) {
?>
  
<?php
  echo '<tr>';
    echo '<th scope="row" class="id">'.$row['id_factura'].'</th>';
    echo '<td>'.$row['nom_cliente'].'</td>';
    echo '<td>'.$row['fecha'].'</td>';
    echo '<td>'.$row['producto'].'</td>';
    echo '<td class="importe">'.$row['importe']*(1+$row['iva']/100).'€ </td>';
    echo '<td class="factura"><a href="factura.php?id='.$row['id_factura'].'">Ver factura</a></td>';
  echo '</tr>';
?>
    
    <?php
    }
  }
?>
</table>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>