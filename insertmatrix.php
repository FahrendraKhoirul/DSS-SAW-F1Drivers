<?php
include "config.php";
$idmatrix = $_POST['id_matrix'];
$idalt = $_POST['idalt'];
$idbobot = $_POST['idbobot'];
$idskala = $_POST['idskala'];

$sql = "INSERT INTO nilai (id_nilai,id_alternatif, id_bobot, id_skala) VALUES ('" . $idmatrix . "',
                                    '" . $idalt . "','" . $idbobot . "','" . $idskala . "')";
$a = $conn->query($sql);
if ($a === true) {
  header('location: dtmatrix.php');
} else {
  echo "Error";
}
