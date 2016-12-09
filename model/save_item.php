<?php

$sql = "UPDATE scholen SET schoolname='".$_POST['schoolname']."', adress='".$_POST['adress']."' WHERE ID='".$id."'";
$result = $mysqli->query($sql);
?>