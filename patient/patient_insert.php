<?php
include "config.php";
include "util.php";

$conn = dbconnect($host,$dbid,$dbpass,$dbname);

$pat_no = $_POST['pat_no'];
$pat_name = $_POST['pat_name'];
$pat_phone = $_POST['pat_phone'];

echo "insert into patient (pat_no, pat_name, pat_phone) values('$pat_no', '$pat_name', '$pat_phone')";

$ret = mysqli_query($conn, "insert into patient (pat_no, pat_name, pat_phone) values('$pat_no', '$pat_name', '$pat_phone')");
if(!$ret)
{
	echo mysqli_error($conn);
    msg('Query Error : '.mysqli_error($conn));
}
else
{
    s_msg ('성공적으로 입력 되었습니다');
    echo "<meta http-equiv='refresh' content='0;url=Patients.php'>";
}

?>
