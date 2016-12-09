<?php
$sql = "INSERT INTO scholen(schoolname, adress, zipcode, district, telnr, email, website, openday, openclass, infonight, private, level, concept, specials, tto, sports, tech, spanish, vso, vmboB, vmboK, vmboT, havo, vwo, gymnasium, basis, art) VALUES ('".$_POST['schoolname']."','".$_POST['adress']."','".$_POST['zipcode']."','".$_POST['district']."','".$_POST['telnr']."','".$_POST['email']."','".$_POST['website']."','".$_POST['openday']."','".$_POST['openclass']."','".$_POST['infonight']."','".$_POST['private']."','".$_POST['level']."','".$_POST['concept']."','".$_POST['specials']."','".$_POST['tto']."','".$_POST['sports']."','".$_POST['tech']."','".$_POST['spanish']."','".$_POST['vso']."','".$_POST['vmboB']."','".$_POST['vmboK']."','".$_POST['vmboT']."','".$_POST['havo']."','".$_POST['vwo']."','".$_POST['gymnasium']."','".$_POST['basis']."','".$_POST['art']."')";
$result = $mysqli->query($sql);

echo $sql;
?>