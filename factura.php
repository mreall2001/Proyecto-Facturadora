<?php
include "includes/db.php";
?>
<?php
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $stm = $db->prepare("SELECT * FROM facturas where id_factura=?");
  $stm->bindParam(1, $id);
  $res = $stm->execute();

  while ($row = $res->fetchArray()) {
      echo "<p> {$row['id_factura']}</p>";
      
  }
}
?>