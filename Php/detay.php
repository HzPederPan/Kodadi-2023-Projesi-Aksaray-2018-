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
  <h1 class="display-6">YAPILACAK İŞİN DETAYI:</h1>
    <?php
        include "baglanti.php";

        $id = $_GET["id"];
        $select = $conn->prepare("SELECT * FROM yapilacaklarlistesi WHERE id=$id");
        $select->execute();
        $result = $select->fetch();

        $baslik = $result["baslik"];
        $aciklama = $result["aciklama"];
        $tarih = $result["tarih"];
        $yapildi = $result["yapildi"];
        $olusturma_tarihi = $result["olursturma_tarihi"];
        $guncelleme_tarihi = $result["guncelleme_tarihi"];
    ?>
    <table class="table">
      <tr>
        <th>
          Başlık:
        </th>
        <td>
            <?php echo $baslik; ?>
        </td>
      </tr>

      <tr>
        <th>
          Açıklama:
        </th>
        <td>
            <?php echo $aciklama; ?>
        </td>
      </tr>

      <tr>
        <th>
          Yapılması Planlanan Tarih:
        </th>
        <td>
            <?php echo $tarih;?>
        </td>
      </tr>

      <tr>
        <th>
          Oluşturma Tarihi:
        </th>
        <td>
            <?php echo ($tarih == "0000-00-00 00:00:00" ? "Tarih Belirtilmemiş": $olusturma_tarihi); ?>
        </td>
      </tr>
      <tr>
        <th>
          Güncelleme Tarihi:
        </th>
        <td>
            <?php echo $guncelleme_tarihi; ?>
        </td>
      </tr>
    </table>

<?php
  echo '<div  class="pull-right btn-group" role="group" aria-label="Basic example">
  <a href="yapildi.php?id='.$id.'" class="btn btn-success">Yapıldı <img src="2.png" width="25" height="25" ></a>
  <a href="sil.php?id='.$id.'&benim=3" class="btn btn-danger">Sil <img src="1.png" width="30" height="18" ></a>
</div>';

?>
</div>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<hr>
</body>
</html>
