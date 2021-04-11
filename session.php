<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$_SESSION["name"] = "Gaurav";
$_SESSION["email"] = "gbkigbk@gmail.com";
echo $_SESSION["name"];
?>
</body>
</html>