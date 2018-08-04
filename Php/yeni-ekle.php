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
  <h1 class="display-6">YENİ İŞ</h1>

<form method="post" action="yeni-kayit.php" >

  <div class="form-group">
    <label for="baslik">Başlık</label>
    <input type="text" name="baslik" class="form-control" id="baslik" placeholder="Başlık">
  </div>

  <div class="form-group">
    <label for="aciklama">Açıklama</label>
    <textarea class="form-control" name="aciklama" id="aciklama" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="tarih">Yapılacak Tarih ve Zaman</label>
    <input type="datetime-local" name="tarih" class="form-control" id="tarih" placeholder="Yapılacak Tarih ve Zaman">
  </div>

  <button type="sumbit" class="btn btn-primary">EKLE <img src="4.png" width="20" height="20" ></button>

</form>  
</div>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<hr>
</body>
</html>
