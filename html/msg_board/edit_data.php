<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
  $sql_query="SELECT * FROM users WHERE id=".$_GET['edit_id'];
  $result_set=mysql_query($sql_query);
  $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
  // variables for input data
  $user_name = $_POST['user_name'];
  $user_msg = $_POST['user_msg'];
  // variables for input data

  // sql query for update data into database
  $sql_query = "UPDATE users SET user_name='$user_name',user_msg='$user_msg' WHERE id=".$_GET['edit_id'];
  // sql query for update data into database

  // sql query execution function
  if(mysql_query($sql_query))
  {
?>
    <script type="text/javascript">
    //  alert('Data Are Updated Successfully');
    window.location.href='index.php';
    </script>
<?php
  }
  else
  {
?>
    <script type="text/javascript">
    alert('error occured while updating data');
    </script>
<?php
  }
  // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
  header("Location: index.php");
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="body">
<div id="content">
<form method="post">
<table align="center">
<tr>
<td><input type="text" name="user_name" placeholder="Your Name" value="<?php echo $fetched_row['user_name']; ?>" required /></td>
</tr>
<tr>
<td><input type="text" name="user_msg" placeholder="write someting" value="<?php echo $fetched_row['user_msg']; ?>" required /></td>
    </tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>
