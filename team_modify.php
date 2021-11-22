<?php
include "config.php";
include "util.php";

$conn = dbconnect($host,$dbid,$dbpass,$dbname);

$emp_no = $_POST['emp_no'];
$emp_name = $_POST['emp_name'];
$emp_phone = $_POST['emp_phone'];
$emp_type = $_POST['emp_type'];


$ret = mysqli_query($conn, "update employee set emp_name = '$emp_name', emp_phone = '$emp_phone', emp_type = '$emp_type' where emp_no = '$emp_no'");

if(!$ret)
{
    msg('Query Error : '.mysqli_error($conn));
}
else
{
    s_msg ('성공적으로 수정 되었습니다');
    echo "<meta http-equiv='refresh' content='0;url=About-team.php'>";
}

?>
