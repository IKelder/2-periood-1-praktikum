<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
This is second page!<br>
<?php
print_r($_GET);
?><br>
<a href="index.php?name=Ingrid&age=32">Esimene leht</a><br>
<?php echo $_GET; ?><br>
<?php
$jada = array("Ingrid", "20");
echo $jada[1];
?><br>

</body>
</html>