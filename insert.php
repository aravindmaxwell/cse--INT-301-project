
<?php

$conn = mysqli_connect('localhost','root','123','project');

if(!$conn)
        {
                echo "not connected to server";
        }
if(!mysqli_select_db($conn,'formtable'))
        {
                echo "database not selected";
        }
$Name = $_POST('username');
$Password= $_POST('password');
$cnfpassword= $_post('confirmpassword');
$email= $_POST('email');
$sql = "INSERT INTO formtable (username,password,confirmpassword,email) VALUES ('$Name','$Password',$confirmpassword,$e$
if(!mysqli_query($conn,$sql))
{
        echo "nOt inserted";
}
else
{
        echo "inserted";
}
?>


https://github.com/aravindmaxwell/cse--INT-301-project.git


















      if database not selected then it will show you a msg



























