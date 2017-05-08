<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
  // variables for input data
  $user_name = $_POST['user_name'];
  $user_msg = $_POST['user_msg'];
  // variables for input data

  // sql query for inserting data into database

  $sql_query = "INSERT INTO users(user_name,user_msg) VALUES('$user_name','$user_msg')";
  mysql_query($sql_query);

  // sql query for inserting data into database

  echo '<script type="text/javascript">
    window.location = "http://test123/msg_board/index.php"
      </script>';

}
?>



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>MessageBoard</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="user_name" placeholder="your name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="user_msg" placeholder="write down some thing" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save" onclick="locatinon.herf='index.php'"><strong>SENT</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>

