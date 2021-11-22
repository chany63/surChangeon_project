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

echo "insert into meditask (task_no, pat_no, disease, emp_no, medication, medi_date) values('$task_no', '$pat_no', '$disease', '$emp_no', '$medication', '$medi_date')";

$ret = mysqli_query($conn, "insert into meditask (task_no, pat_no, disease, emp_no, medication, medi_date) values('$task_no', '$pat_no', '$disease', '$emp_no', '$medication', '$medi_date')");
if(!$ret)
{
	echo mysqli_error($conn);
    msg('Query Error : '.mysqli_error($conn));
}
else
{
    s_msg ('성공적으로 입력 되었습니다');
    echo "<meta http-equiv='refresh' content='0;url=Medication-tasks.php'>";
}

?>
