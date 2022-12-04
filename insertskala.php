<?php
include "config.php";
$idskala = $_POST['idskala'];
$value = $_POST['value'];
$keterangan = $_POST['keterangan'];

$sql = "INSERT INTO skala (id_skala, nama_skala, value) VALUES ('" . $idskala . "','" . $keterangan . "','" . $value . "')";
$a = $conn->query($sql);
if ($a === true) {
  header('location: dtskala.php');
} else {
  echo "Error";
}
