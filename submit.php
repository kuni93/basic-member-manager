<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="3; url=index.php">
  <title>Member Submit</title>
</head>
<body>
<?php
  require_once("dbtools.inc.php");
  $id=$_POST["id"];
  $name=$_POST["name"];
  $age=$_POST["age"];
  $height=$_POST["height"];
  $weight=$_POST["weight"];

  $link=create_connection();

  $result=execute_sql("4a3g0007_database", "INSERT INTO 160930_works(id, name, age, height, weight) VALUES('$id','$name','$age','$height','$weight')", $link);

  $result=execute_sql("4a3g0007_database", "SELECT * FROM 160930_works", $link);
  echo "目前資料庫共：".mysql_num_rows($result). " 位會員";

  mysql_close($link);
?>
<p>操作完成，將在 3 秒後返回首頁<br>如果沒有自動跳轉<a href="index.php">請點我</a></p>
</body>
</html>