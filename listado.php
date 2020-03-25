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
    header('Location: listado.php');
  }
  else  {
      $stm = $db->prepare("SELECT * FROM facturas");
      $res = $stm->execute();
$res = $db->query('SELECT * FROM facturas');
while ($row = $res->fetchArray()) {
    echo $row['id_factura'];
    echo '   ';
    echo $row['fecha'];
    echo '   ';
    echo $row['nom_cliente']; 
    echo '   ';
    echo $row['apellidos_cliente']; 
    echo '   ';
    echo $row['direccion_cliente']; 
    echo '   ';
    echo $row['poblacion_cliente']; 
    echo '   ';
    echo $row['provincia_cliente']; 
    echo '   ';
    echo $row['cdcliente']; 
    echo '   ';
    echo $row['identicliente']; 
    echo '   ';
    echo $row['producto']; 
    echo '   ';
    echo $row['importe']; 
    echo '   ';
    echo $row['iva']; 
    echo '   ';
    echo '<br>';
    }
  }
?>
<div><a href="index.php"><span id="btn">Index</span></a></div>