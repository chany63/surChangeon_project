<?php
include "config.php";
include "util.php";

$conn = dbconnect($host,$dbid,$dbpass,$dbname);

$pat_no = $_POST['pat_no'];
$pat_name = $_POST['pat_name'];
$hosp_date = $_POST['hosp_date'];
$bed_no = $_POST['bed_no'];

echo "insert into hospitalized (pat_no, pat_name, hosp_date, bed_no) values('$pat_no', '$pat_name', '$hosp_date', '$bed_no')";

$ret = mysqli_query($conn, "insert into hospitalized (pat_no, pat_name, hosp_date, bed_no) values('$pat_no', '$pat_name', '$hosp_date', '$bed_no')");
if(!$ret)
{
	echo mysqli_error($conn);
    msg('Query Error : '.mysqli_error($conn));
}
else
{
    s_msg ('성공적으로 입력 되었습니다');
    echo "<meta http-equiv='refresh' content='0;url=Hospitalization.php'>";
}

?>
