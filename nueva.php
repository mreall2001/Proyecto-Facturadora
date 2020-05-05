<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<title>Facturadora</title>
   <style>
        body{
            font-family: sans-serif, verdana, arial;
            background-color: #ccf1ff;
        }

        .fac {
            font-family: sans-serif, verdana, arial;
            background-color: white;
            margin-left: 500px;
            margin-right: 500px;
        } 
        h1{
            color: black;
        }
        p.empresa{
            outline-color: blue;
            outline-style: dotted;
            
        }
        .name{
          color: black;
        }
        .form-group.col-md-6 h2.name{
          font-size: 20px;
        }
        .form-group.col-md-6 p.empresa{
          padding-left: 10px;
          border: 2px;
        }
        .datos{
          color: black;
          font-size: 20px;
          text-decoration: underline;
        }
        .enviar{
          margin-bottom: 20px;
        }
        
   </style>
  <links>
   <?php
    include "includes/cabezera.html";
   ?>
  </links>
</head>
<body>
<?php
include "includes/db.php";
?>
<div class="container">
<center>
<h1>Becarios No</h1>
</center>


  
  <div class="row">  
  
    <div class="form-group col-md-12 col-lx-6">
      <?php
      include "includes/empresa.php";
      ?>
  </div>
  </div>
  <form action="listado.php" method="post">
  <div class="form-group">
      <label for="inputFechal4">Fecha</label>
      <input required type="date" class="form-control" name="fecha" max= "<?php echo date("Y-m-d",strtotime(date("Y-m-d")));?>">
    </div>
  <h2 class="datos">Datos del cliente</h2>
  <div class="form-row">
    <div class="form-group col-xl-6">
      <label for="inputEmail4">Nombre del cliente</label>
      <input type="text" class="form-control" name="nom_cliente">
    </div>
    <div class="form-group col-xl-6">
      <label for="inputPassword4">Apellidos del cliente</label>
      <input type="text" class="form-control" name="apellidos_cliente">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Dirección de correo del cliente</label>
    <input type="text" class="form-control" name="direccion_cliente">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Población del cliente</label>
    <input type="text" class="form-control" name="poblacion_cliente">
  </div>
  <div class="form-row">
    <div class="form-group col-xl-6">
      <label for="inputCity">Provincia del cliente</label>
      <input type="text" class="form-control" name="provincia_cliente">
    </div>
    <div class="form-group col-xl-4">
      <label for="inputState">Codigo Postal</label>
      <input type="number" class="form-control" name="cdcliente">
    </div>
    <div class="form-group col-xl-2">
      <label for="inputZip">Id.Fiscal</label>
      <input type="number" class="form-control" name="identicliente">
    </div>
  </div>
  <h2 class="datos">Datos del Producto</h2>
<div class="form-group">
      <label for="inputNombretienda4">Descripción del producto</label>
      <textarea  class="form-control" name="producto">
      </textarea>
    </div>
  
  <div class="form-row">
    
    <div class="form-group col-lx-4 offset-md-6">
      <label for="inputCity">Importe</label>
      <input type="number" class="form-control" name="importe">
    </div>
    <div class="form-group col-lx-2">
      <label for="inputState">Iva</label>
      <input type="number" class="form-control" name="iva" value="21">
    </div>

  <div class="col-12 enviar">  
    <button type="submit" class="btn btn-primary btn-lg btn-block" name="enviar">Enviar</button>
  </div>

</form>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</hmtl>