<?php

echo "Type a command to begin:\n";
echo "1 issuesphp:serve | Start a local server\n";
echo "2 issuesphp:make:migration | Creates a new migration\n";
// Ejecuta el comando 'ls -l' para listar archivos
// $resultado = shell_exec('ls -l');

// $result = shell_exec('php hello.php');

// $result = shell_exec('gcc test.c -o test && ./test');

// $result = shell_exec('./test');

// $result = shell_exec('gcc o.c -o o && ./o');

$result = shell_exec('g++ o.c -o o && ./o');

// $result = shell_exec('g++ vendor/issuesphp/framework/o.c -o o && ./o');

// $result = shell_exec('gcc vendor/issuesphp/framework/o.c -o o && ./o');



// $result1 = shell_exec('gcc o.c -o o');

// $result = shell_exec('./o');

// $result = shell_exec('mkdir test.php');

// system('xdg-open README.md');

// system('xdg-open ./o');

// Muestra el resultado en pantalla
// echo "<pre>$result</pre>";

// se usa para leer no para abrir
echo $result;
?>