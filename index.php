<?php
// include_once 'index.html'

$task = ($_POST['tasks']);
if ($task != ""){
    $datahandler = fopen("tasks.txt", "a+");
    fwrite($datahandler, $task . "\n");

}

$taskarray = [];
while (!feof($datahandler)){
    $line = fgets($datahandler);
    array_push($taskarray, $line);
}
fclose($datahandler);
print_r (json_encode(array("tasks" => $taskarray)));
