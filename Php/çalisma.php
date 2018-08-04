<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
