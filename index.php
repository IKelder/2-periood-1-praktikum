<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$link_file = "second_page.php";
$age = 32; 
?>
<a  href="<?php echo $link_file; ?>">Second Page</a><br>
<?php
print_r($_GET);
?><br>
<?php echo "<h1>" . $_GET["name"] . "</h1>"; ?>   

</body>
</html>