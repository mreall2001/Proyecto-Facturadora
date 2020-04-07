
<!DOCTYPE html>
<html>
<head>
    <title>Factura v2</title>
    <style>
    </style>
    <link rel="stylesheet" type="text/css" href="pruebaestilo.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $('#printInvoice').click(function(){
    Popup($('.invoice')[0].outerHTML);
    function Popup(data) 
    {
        window.print();
        return true;
    }
    });
    </script>
</head>
<body>
<links>
   <?php
    include "includes/cabezera.html";
   ?>
</links>
<?php
include "includes/db.php";
?>

<?php
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $stm = $db->prepare("SELECT * FROM facturas where id_factura=?");
  $stm->bindParam(1, $id);
  $res = $stm->execute();
  $row = $res->fetchArray();
}
?>
<div id="invoice">

    <div class="toolbar hidden-print">
        <div class="text-right">
            <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i>Imprimir</button>
            <button class="btn btn-info"><i class="fa fa-file-pdf-o"></i>Exportar como PDF</button>
        </div>
        <hr>
    </div>
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                        <a target="_blank" href="https://lobianijs.com">
                            <img src="https://cdn-profiles.tunein.com/p1252413/images/logog.png" data-holder-rendered="true" class="foto">
                        </a>
                    </div>
                    <div class="col company-details">
                        <h2 class="name">
                            <a target="_blank">
                            BecariosNO
                            </a>
                        </h2>
                        <div>C/Poligon Can Valero, Palma de Mallorca, España</div>
                        <div>07705</div>
                        <div>becariosno@gmail.com</div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">Factura a:</div>
                        <h2 class="to"><?php echo $row['nom_cliente'] ?></h2>
                        <div class="address"><?php echo $row['poblacion_cliente'] ?></div>
                        <div class="email"><?php echo $row['direccion_cliente'] ?></a></div>
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id">Factura #<?php echo $row['id_factura'] ?></h1>
                        <div class="date">Fecha de factura: <?php echo $row['fecha'] ?></div>
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-left">Descripción</th>
                            <th class="text-right"></th>
                            <th class="text-right"></th>
                            <th class="text-right">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="no">01</td>
                            <td class="text-left"><h3>
                                <a target="_blank" href="https://www.youtube.com/channel/UC_UMEcP_kF0z4E6KbxCpV1w">
                                <?php echo $row['producto'] ?>
                                </a>
                                </h3>
                            </td>
                            <td class="unit"></td>
                            <td class="qty"></td>
                            <td class="total">$0.00</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">SUBTOTAL</td>
                            <td>$5,200.00</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">IVA 21%</td>
                            <td>$1,300.00</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">TOTAL</td>
                            <td>$6,500.00</td>
                        </tr>
                    </tfoot>
                </table>
                <div class="thanks">Gracias!</div>
            </main>
            <footer>
                La factura ha sido creada en un ordenador, por lo cual no necesita de firma ni sello.
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>
</body>
</html>