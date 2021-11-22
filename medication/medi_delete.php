<?php
include "config.php";
include "util.php";

$conn = dbconnect($host,$dbid,$dbpass,$dbname);

$task_no = $_GET['task_no'];

$ret = mysqli_query($conn, "delete from meditask where task_no = '$task_no'");

if(!$ret)
{
    msg('Query Error : '.mysqli_error($conn));
}
else
{
    s_msg ('성공적으로 삭제 되었습니다');
    echo "<meta http-equiv='refresh' content='0;url=Medication-tasks.php'>";
}

?>
