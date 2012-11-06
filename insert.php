<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("sahara", $con);

$sql="INSERT INTO Products (ProductName, Description, Price)
VALUES
('$_POST[ProductName]','$_POST[Description]','$_POST[Price]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con);
?>