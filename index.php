<html>
<head>
<meta charset = "utf-8">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
//создание массива
$ar=[];
$ar[]="Phones";
$ar[]="Computers";
$ar[]="Televisions";
$ar[]="Accesories";

foreach ($ar as &$val) {
    $str = "<ul>".$val."</ul>";
	echo $str;
}


?>

</body>

<html>