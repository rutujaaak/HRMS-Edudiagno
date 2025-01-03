<?php include("./commonFiles/_init.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./commonFiles/htmlHeader.php") ?>
    <link rel="stylesheet" href="public/css/signup.css">
</head>

<body>
    <div class="container">
        <div class="form-wrapper">
            <h1>Sign-Up Page</h1>
            <form id="employeeForm" class="active" method="post" action="processSignup.php">
                <input type="hidden" name="role" value="employee">
                <label for="empName">Employee Name:</label>
                <input type="text" id="empName" name="empName" required>
                <label for="empEmail">Email:</label>
                <input type="email" id="empEmail" name="empEmail" required>
                <label for="empPassword">Password:</label>
                <input type="password" id="empPassword" name="empPassword" required>
                <button type="submit">Sign Up as Employee</button>
            </form>

            <form id="adminForm" method="post" action="processSignup.php">
                <input type="hidden" name="role" value="admin">
                <label for="adminName">Admin Name:</label>
                <input type="text" id="adminName" name="adminName" required>
                <label for="adminEmail">Email:</label>
                <input type="email" id="adminEmail" name="adminEmail" required>
                <label for="adminPassword">Password:</label>
                <input type="password" id="adminPassword" name="adminPassword" required>
                <button type="submit">Sign Up as Admin</button>
            </form>

            <div class="toggle-buttons">
                <button onclick="showEmployeeForm()">Employee</button>
                <button onclick="showAdminForm()">Admin</button>
            </div>
        </div>
    </div>
    <script>
        const employeeForm = document.getElementById("employeeForm");
        const adminForm = document.getElementById("adminForm");

        function showEmployeeForm() {
            employeeForm.classList.add("active");
            adminForm.classList.remove("active");
        }

        function showAdminForm() {
            adminForm.classList.add("active");
            employeeForm.classList.remove("active");
        }
    </script>
</body>

</html>
