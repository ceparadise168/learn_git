<?php
include_once 'dbconfig.php';
// delete condition
if(isset($_GET['delete_id']))
{
  $sql_query="DELETE FROM users WHERE id=".$_GET['delete_id'];
  mysql_query($sql_query);
  header("Location: $_SERVER[PHP_SELF]");
}
// delete condition

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Message Board</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
function edt_id(id)
{
  window.location.href='edit_data.php?edit_id='+id;
}
function delete_id(id)
{

  window.location.href='index.php?delete_id='+id;

}
</script>
</head>
<body>
<center>

<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th colspan="5"><a href="add_data.php">add data here.</a></th>
    </tr>
    <th>USER</th>
    <th>MESSAGE</th>
    </tr>
<?php
$sql_query="SELECT * FROM users";
$result_set=mysql_query($sql_query);
while($row=mysql_fetch_row($result_set))
{
?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
  <td><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><input type="submit" name = "Send" value="EDIT" /></a></td>
        <td><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><input type="submit" name="Send"  value="DELETE" /></a></td>
        </tr>
<?php
}
?>
    </table>
    </div>
</div>

</center>
</body>
</html>
