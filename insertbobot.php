<?php
include "config.php";
$idbobot = $_POST['idbobot'];
$idkrit = $_POST['idkrit'];
$value = $_POST['value'];

$sql = "INSERT INTO bobot (id_bobot,id_kriteria,value) VALUES ('" . $idbobot . "','" . $idkrit . "','" . $value . "')";
$a = $conn->query($sql);
if ($a === true) {
  header('location: dtbobot.php');
} else {
  echo "Error";
}
