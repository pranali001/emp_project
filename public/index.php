<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
    <!-- Bootstrap CSS (via CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-L2p59hD2daM2Nm3e6uTLE6+hxYFjA5mxHLb7cPQJliUw5IXkz9lEwM5mH7o2vm0v" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Container for Content -->
    <div class="container">
        <h1>Employee Registration</h1>

        <!-- Employee Form -->
        <div class="form-container">
            <form action="backend/controllers/employeeController.php" method="POST">
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" required>
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" required>
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select" id="gender" name="gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="mobile_no" class="form-label">Mobile No</label>
                    <input type="text" class="form-control" id="mobile_no" name="mobile_no" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-custom">Register Employee</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js (via CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb8p2mA3sClbmPTrOltxPZbPjIf5jaX5t0lZc0gdbM2vkeBly" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-cuGfY2RcdVybLkSY9dbZmb91GejA/qg6mC5pQXwrN1ztR74AwAkq78lf/jwp5zM0" crossorigin="anonymous"></script>
</body>
</html>
