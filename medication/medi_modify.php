<?php
include "config.php";
include "util.php";

$conn = dbconnect($host,$dbid,$dbpass,$dbname);

$task_no = $_POST['task_no'];
$pat_no = $_POST['pat_no'];
$disease = $_POST['disease'];
$emp_no = $_POST['emp_no'];
$medication = $_POST['medication'];
$medi_date = $_POST['medi_date'];


$ret = mysqli_query($conn, "update meditask set pat_no = '$pat_no', disease = '$disease', emp_no = '$emp_no', medication = '$medication', medi_date = '$medi_date' where task_no = '$task_no'");

if(!$ret)
{
    msg('Query Error : '.mysqli_error($conn));
}
else
{
    s_msg ('성공적으로 수정 되었습니다');
    echo "<meta http-equiv='refresh' content='0;url=Medication-tasks.php'>";
}

?>
