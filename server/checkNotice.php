<?php
$dbName = 'iis';
$dbPwd = 'ENV_VALUE';

$con = mysqli_connect('localhost', $dbName, $dbPwd);
if ($con) {
        if (mysqli_select_db($con, $dbName)) {
            $sql1 = "SELECT * FROM noticeInfo WHERE id=1";
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
