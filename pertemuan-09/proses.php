<?php
session_start();
$sesnama = $_POST["txtNama"];
$sesemail = $_POST["txtEmail"];
$sespesan = $_POST["txtPesan"];
$_SESSION["sesnama"] = $sesnama;
$_SESSION["sesemail"] = $sesemail;
$_SESSION["sespesan"] = $sespesan;

$txtNim = $_POST["txtNim"];
$txtNmLengkap = $_POST["txtNmLengkap"];
$txtT4Lhr = $_POST["txtT4Lhr"];
$txtTglLhr = $_POST["txtTglLhr"];
$txtHobi = $_POST["txtHobi"];
$txtPasangan = $_POST["txtPasangan"];
$txtKerja = $_POST["txtKerja"];
$txtNmOrtu = $_POST["txtNmOrtu"];
$txtNmKakak = $_POST["txtNmKakak"];
$txtNmAdik = $_POST["txtNmAdik"];

$_SESSION["txtNim"] = $txtNim;
$_SESSION["txtNmLengkap"] = $txtNmLengkap;
$_SESSION["txtT4Lhr"] = $txtT4Lhr;
$_SESSION["txtTglLhr"] = $txtTglLhr;
$_SESSION["txtHobi"] = $txtHobi;
$_SESSION["txtPasangan"] = $txtPasangan;
$_SESSION["txtKerja"] = $txtKerja;
$_SESSION["txtNmOrtu"] = $txtNmOrtu;
$_SESSION["txtNmKakak"] = $txtNmKakak;
$_SESSION["txtNmAdik"] = $txtNmAdik;
header("location: index.php");
?>