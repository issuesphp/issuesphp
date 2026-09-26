<?php

echo "Type a command to begin:\n";
echo "issuesphp:serve | Start a local server\n";
echo "issuesphp:make:migration | Creates a new migration\n";
echo "issuesphp:make:push:migration | Creates a new migration and migrate\n";
echo "issuesphp:drop:one:migration | Drop One migration\n";


// $result = shell_exec('g++ o.c -o o && ./o');

// $result = shell_exec('g++ vendor/issuesphp/framework/o.c -o o && ./o');

$result = shell_exec('g++ vendor/issuesphp/framework/o.c -o o $(mysql_config --cflags --libs) && ./o');

echo $result;
?>