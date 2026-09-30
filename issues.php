<?php

include 'vendor/issuesphp/framework/src/Issues/Config/App/path.php';

echo "Connect Database an press y / n:\n";
echo "\n";
echo "Type a command to begin for option y:\n";
echo "issuesphp:make:push:migration | Creates a new migration and migrate\n";
echo "issuesphp:drop:one:migration | Drop One migration\n";
echo "issuesphp:db:seed:one | Insert One values\n";

echo "\n";
echo "Type a command to begin for option n:\n";
echo "issuesphp:serve | Start a local server\n";


$result = shell_exec(PATH_COMMANDS);

echo $result;
?>