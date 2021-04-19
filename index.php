// include_once 'index.html'
<?php

$task = (isset($_POST['tasks']));
if (isset($task) != ""){
    $datahandler = fopen("tasks.txt", "a+");
    fwrite($datahandler, $task . "\n");
}

$taskarray = [];
while (! feof($datahandler)){
    $line = fgets($datahandler);
    array_push($taskarray, $line);
}
fclose($datahandler);
foreach($taskarray as $key => $value)
echo json_encode(array('tasks' => $value));
