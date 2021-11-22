<?php
include "config.php";
include "util.php";

$conn = dbconnect($host,$dbid,$dbpass,$dbname);

$emp_no = $_GET['emp_no'];

$ret = mysqli_query($conn, "delete from employee where emp_no = '$emp_no'");

if(!$ret)
{
    msg('Query Error : '.mysqli_error($conn));
}
else
{
    s_msg ('성공적으로 삭제 되었습니다');
    echo "<meta http-equiv='refresh' content='0;url=About-team.php'>";
}

?>
