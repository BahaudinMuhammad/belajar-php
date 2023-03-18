<?php

//$data = [
    //"action" => "create"
//];
//if (isset($data ["action"])){
    //$action = $data["action"];
//} else {
    //$action = $data ["nothing"];
//}

//echo $action;

//expression di atas bisa diganti dengan

$baha = [
    "action" => "reading"
];
$action = $baha ["action"] ?? "nothing";

echo $action;