<?php
include("config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $a = $_POST['busnum'];
    $b = $_POST['from'];
    $c = $_POST['to'];
    $d = $_POST['date'];
    $e = $_POST['artime'];
    $f = $_POST['depttime'];


    $qry = mysqli_query($con,"INSERT INTO info (i_bus_num, i_from, i_to, i_date, i_ar_time, i_dept_time) VALUES ('$a','$b','$c','$d','$e','$f')");

    if ($qry == true) {
        header("location:admin_info.php");
    } else {
        echo "not" . mysqli_error();
    }
} else {
    echo "request method is not post";
}
?>
