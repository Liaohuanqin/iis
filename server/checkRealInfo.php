<?php
$dbName = 'iis';
$dbPwd = 'ENV_VALUE';
$num = $_GET['num'];

$con = mysqli_connect('localhost', $dbName, $dbPwd);
if ($con) {
        if (mysqli_select_db($con, $dbName)) {
            $sql1 = "SELECT * FROM userList WHERE num='$num'";
            $result = mysqli_query($con, $sql1);
            $results = array();
            while ($row = mysqli_fetch_assoc($result)) {
            	$results[] = $row;
            }
            echo json_encode($results);
        }
    } else {
        die(mysqli_error());
    }
?>