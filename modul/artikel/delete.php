<?php

$database = new Database();
$nik = $_GET["nik"];

if (isset($_GET["nik"])) {
    $database->delete("tb_penduduk", "where nik=" . $nik);
    header("Location: home");
}
