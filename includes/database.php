<?php 

//host usuario contraseña nombreBD

$db = mysqli_connect(
    'sql107.epizy.com', 
    'epiz_32466124', 
    'fokUdSC6cytamcl', 
    'epiz_32466124_curriculum_ari'
);




$db->set_charset("utf8");


if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
