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

$read = file_get_contents($datahandler);
$lines = explode("\n", $read);//get
// foreach($lines as $key => $value){
//     $code[] =  $value[0];
//     $name[] = $value[1];
//     $cost[] = $value[2];
//     $selling_price[] = $value[3];
//   }
print_r($lines);