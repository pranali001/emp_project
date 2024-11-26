<?php
include 'includes/db.php';

$eid = $_POST['eid'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$mobile_no = $_POST['mobile_no'];
$status = $_POST['status'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];

// If the eid is set, update existing employee, otherwise insert new one.
if ($eid) {
    $sql = "UPDATE employee SET fname = ?, lname = ?, gender = ?, mobile_no = ?, status = ?, country = ?, state = ?, city = ? WHERE eid = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$fname, $lname, $gender, $mobile_no, $status, $country, $state, $city, $eid]);
} else {
    $sql = "INSERT INTO employee (fname, lname, gender, mobile_no, status, country, state, city) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$fname, $lname, $gender, $mobile_no, $status, $country, $state, $city]);
}

header("Location: index.php");
?>
