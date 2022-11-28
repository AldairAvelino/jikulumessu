<?php

$HOST = "localhost";
$ROOT = "root";
$PASSWORD = "";
$DATABASE = "jikulumessu";

$connection = mysqli_connect($HOST, $ROOT, $PASSWORD, $DATABASE);

if (mysqli_connect_error()) {
    echo "FALHA AO CONECTAR-SE A BASE DE DADOS";
}
