<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Yapılacaklar Listesi</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">	
	<link rel="stylesheet" type="text/css" href="assets/css/mycss.css">
	<link rel="shortcut icon" type="image/png" href="favicon.ico.ico"/>
</head>
<body>
<?php include "navbar.php" ?>
<div class="jumbotron">
  <h1 class="display-6">YAPILACAKLAR İŞLER:</h1>
  <ul class="list-group">

  <?php
  	  include "baglanti.php";
  	  $select = $conn->prepare("SELECT * FROM yapilacaklarlistesi");
  	  $select->execute();

  	  $results = $select->fetchAll();
  	  
  	  foreach ($results as $key => $value) {
  	  	$id = $value["id"];
  	  	$baslik = $value["baslik"];
  	  	$yapildi = $value["yapildi"];
  	  	$tarih = $value["tarih"];

  	  	$li = '<li class="list-group-item '.($yapildi == 0 ? "": "disabled my-disabled").'">'.$baslik.'
  	  	<span class="badge badge-'.($tarih == "0000-00-00 00:00:00" ? "danger": "success").'"> '.($tarih == "0000-00-00 00:00:00" ? "Tarih Belirtilmemiş": $tarih).' </span>
  	  	<div  class="pull-right btn-group" role="group" aria-label="Basic example">
  <a href="detay.php?id='.$id.'" class="btn btn-info">Detay <img src="3.png" width="23" height="20" ></a>
  <a href="yapildi.php?id='.$id.'" class="btn btn-success">Yapıldı <img src="2.png" width="25" height="25" ></a>
  <a href="sil.php?id='.$id.'&benim=3" class="btn btn-danger">Sil <img src="1.png" width="30" height="18" ></a>
</div></li>';
			echo $li;
  	  }
  ?>
</ul>
</div>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<hr>
</body>
</html>
