<!DOCTYPE html>
<html>
<body>
<a href="PHP-20200108.php?subject=PHP&web=runoob.com">Test $_GET</a>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php
$name = htmlspecialchars($_POST['fname']);
echo $name;
echo "study " . $_GET['subject'] . "@" . $_GET['web'] . "<br>";
echo '这是第"' . __LINE__ . '"行' . "<br>";
echo '该文件位于"' . __FILE__ . '"' . "<br>";
echo '该文件位于"' . __DIR__ . '"' . "<br>";
?>

</body>
</html>