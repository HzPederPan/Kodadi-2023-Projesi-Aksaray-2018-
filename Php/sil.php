<?php

include "baglanti.php";


$id = $_GET["id"];
$benim = $_GET["benim"];


	$sql = "DELETE FROM yapilacaklarlistesi WHERE id=$id";


	$conn->exec($sql);

	header("Refresh:2; url=index.php");
	echo "Kayıt Başarıyla Silindi. Ana Sayfaya Yönlendiriliyorsunuz...";

?>