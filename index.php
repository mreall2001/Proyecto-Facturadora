<!DOCTYPE html>
<html>
<head>
<title>Facturadora</title>    
<style>
    .titulo {
        text-align: center;
    }
    .btn-primary {
        margin: 20px 10px;
    }
    .titulo {

    }
    .container {
        border: 1px solid black;
        left: 15px;
        border-style: dotted;
        border-width: thick;
    }
    th {
        text-align: center;
        padding: 260px;
    }
    p {
        font-style: italic;
    }
    .foto {
        margin-left: 200px;
        margin-right: 10px;
    }
    .gmaster {
        width: 150px;
        height: 150px;
        margin-right: 350px;
        margin-left: 60px;
        bottom: 100%;
        padding: -100px;
        margin-top: 0px;
        margin-bottom: -300px;
    }
</style>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<body>
    <div class="titulo">
        <h1>Facturadora</h1>
    </div>  
        <div class="container row col text-center">
            <a type="button" class="btn btn-primary btn-lg btn-block" href="nueva.php">Crear factura</a>
            <a type="button" class="btn btn-primary btn-lg btn-block" href="listado.php">Listado</a>
        </div><br>
    <div class="titulo">
        <h2>Creditos</h2>
    </div>
    <div class="foto">
        <img src="gmaster.jfif" alt="Foto" class="gmaster">
        <img src="gmaster.jfif" alt="Foto" class="gmaster">
        <img src="gmaster.jfif" alt="Foto" class="gmaster">
    </div>
    <table>
        <tr>
            <th>(Programador)<br>
        <p>Miguel Real López</p></th>
            <th>(Programador)<br>
        <p>James Cañarte Quintana</p></th>
            <th>(Programador)<br>
        <p>Edgard Leandro Ocampo</p></th>
        </tr>
    </table>
</body>
</html>
