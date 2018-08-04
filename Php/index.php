<!DOCTYPE html>
<html>
<head>
	<title>Yapılacaklar Listesi</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootsrap.css">
</head>
<body>
<script type="text/javascript" src="assests/js/bootsrap.js"></script>
<div class="alert alert-primary" role="alert">
  A simple primary alert—check it out!
</div>
<hr>
<?php
//Yapımcı: HzPederPan
echo "<p>hello word</p>";
?>
<?php
$x = 5;
$y = 10;

function myTest() {
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; // outputs 15
?>
<hr>
<?php
$caluor = "yeşil";
echo "Benim Arabam " . $caluor . "'dir";	
?>

</body>
</html>
