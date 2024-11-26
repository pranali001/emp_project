<?php

$eid = isset($_GET['eid']) ? $_GET['eid'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add/Edit Employee</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2><?= $eid ? 'Edit Employee' : 'Add Employee' ?></h2>
    <form action="save_employee.php" method="POST">
        <input type="hidden" name="eid" value="<?= $eid ?>">
        <label>First Name:</label>
        <input type="text" name="fname" required><br>
        <label>Last Name:</label>
        <input type="text" name="lname" required><br>
        <label>Gender:</label>
        <select name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br>
        <label>Mobile Number:</label>
        <input type="text" name="mobile_no" required><br>
        <label>Status:</label>
        <select name="status" required>
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select><br>
        <label>Country:</label>
        <select name="country" id="country" required>
            <option value="">Select Country</option>
       
        </select><br>
        <label>State:</label>
        <select name="state" id="state" required>
            <option value="">Select State</option>
    
        </select><br>
        <label>City:</label>
        <select name="city" id="city" required>
            <option value="">Select City</option>
         
        </select><br>
        <button type="submit">Save</button>
    </form>

    <script src="assets/js/script.js"></script>
</body>
</html>
