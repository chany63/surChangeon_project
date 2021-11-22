<?php
include "config.php";
include "util.php";

$conn = dbconnect($host,$dbid,$dbpass,$dbname);

$pat_no = $_GET['pat_no'];

$ret = mysqli_query($conn, "delete from hospitalized where pat_no = '$pat_no'");

if(!$ret)
{
    msg('Query Error : '.mysqli_error($conn));
}
else
{
    s_msg ('성공적으로 삭제 되었습니다');
    echo "<meta http-equiv='refresh' content='0;url=Hospitalization.php'>";
}

?>
