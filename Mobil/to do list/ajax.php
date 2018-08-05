<?php
include "baglanti.php";

$baslik = $_POST["baslik"];
$aciklama = $_POST["aciklama"];
$tarih = $_POST["tarih"];
$yapildi = 0;

$insert = $conn->prepare("INSERT INTO yapilacaklarlistesi (baslik,aciklama,tarih,yapildi) VALUES (:baslik, :aciklama,:tarih,:yapildi)");

$insert->bindParam(":baslik",$baslik);
$insert->bindParam(":aciklama",$aciklama);
$insert->bindParam(":tarih",$tarih);
$insert->bindParam(":yapildi",$yapildi);
$insert->execute();

echo "Kayıt Başarılı";
?>