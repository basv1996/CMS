<?php

$sql = "SELECT * from scholen";
$result = $mysqli->query($sql);
$result = convertResultToArray($result);
?>