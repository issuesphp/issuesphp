<?php
// Ejecuta el comando 'ls -l' para listar archivos
// $resultado = shell_exec('ls -l');

$resultado = shell_exec('php hello.php');

// Muestra el resultado en pantalla
echo "<pre>$resultado</pre>";
?>