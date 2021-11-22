<?php
include "config.php";
include "util.php";

$conn = dbconnect($host,$dbid,$dbpass,$dbname);

$pat_no = $_POST['pat_no'];
$pat_name = $_POST['pat_name'];
$pat_phone = $_POST['pat_phone'];


$ret = mysqli_query($conn, "update patient set pat_name = '$pat_name', pat_phone = '$pat_phone' where pat_no = '$pat_no'");
$ret1 = mysqli_query($conn, "update hospitalized set pat_no = '$pat_no', pat_name = '$pat_name'");

if(!$ret | !$ret1)
{
    msg('Query Error : '.mysqli_error($conn));
}
else
{
    s_msg ('성공적으로 수정 되었습니다');
    echo "<meta http-equiv='refresh' content='0;url=Patients.php'>";
}

?>
