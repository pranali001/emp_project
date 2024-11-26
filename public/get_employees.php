<?php
include 'includes/db.php';

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$search = isset($_GET['search']) ? $_GET['search'] : '';
$limit = 10;
$offset = ($page - 1) * $limit;

$sql = "SELECT * FROM employee WHERE fname LIKE ? OR lname LIKE ? OR gender LIKE ? OR mobile_no LIKE ? LIMIT $limit OFFSET $offset";
$stmt = $pdo->prepare($sql);
$searchTerm = "%$search%";
$stmt->execute([$searchTerm, $searchTerm, $searchTerm, $searchTerm]);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['fname'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['mobile_no'] . "</td>";
    echo "<td>" . ($row['status'] ? 'Active' : 'Inactive') . "</td>";
    echo "<td><a href='employee_form.php?eid=" . $row['eid'] . "'>Edit</a> | <a href='delete_employee.php?eid=" . $row['eid'] . "'>Delete</a></td>";
    echo "</tr>";
}
?>
