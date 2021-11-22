<?php
include "config.php";
include "util.php";

$conn = dbconnect($host,$dbid,$dbpass,$dbname);

$pat_no = $_POST['pat_no'];
$pat_name = $_POST['pat_name'];
$hosp_date = $_POST['hosp_date'];
$bed_no = $_POST['bed_no'];


$ret = mysqli_query($conn, "update hospitalized set pat_name = '$pat_name', hosp_date = '$hosp_date', bed_no = '$bed_no' where pat_no = '$pat_no'");

if(!$ret)
{
    msg('Query Error : '.mysqli_error($conn));
}
else
{
    s_msg ('성공적으로 수정 되었습니다');
    echo "<meta http-equiv='refresh' content='0;url=Hospitalization.php'>";
}

?>
