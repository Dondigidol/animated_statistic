<?php
require_once('../connect.php');

$params = new parseINI;
$params->getconfig('params.ini');

$arr = array();

for($i=1; $i<=15; $i++)
{
	$val = "";
	$val = $params->getparam("plan" + $i);
	array_push($arr, $val);
}	

echo json_encode($arr);
// return json_encode();

?>