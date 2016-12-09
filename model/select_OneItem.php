<?php
$sql = "SELECT * FROM scholen WHERE ID= " .$id;

$result = $mysqli->query($sql);
$result = convertResultToArray($result);
?>