<?php
$db = new Sqlite3('facturas.db');
$db->exec("CREATE TABLE IF NOT EXISTS facturas(id_factura INTEGER PRIMARY KEY AUTOINCREMENT, fecha DATE not null, nom_cliente TEXT not null, apellidos_cliente TEXT not null, direccion_cliente TEXT not null,poblacion_cliente TEXT not null, provincia_cliente TEXT not null, cdcliente INT not null, identicliente INT not null, producto TEXT not null, importe INT not null, iva INT not null)");
?>