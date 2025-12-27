<?php include('db.php'); ?>
<html>
<head><title>Student Entry</title></head>
<body>
    <h2>Add New Student</h2>
    <form method="POST">
        Name: <input type="text" name="name" required><br><br>
        Roll No: <input type="text" name="roll_no" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <input type="submit" name="submit" value="Save Data">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name']; $roll = $_POST['roll_no']; $email = $_POST['email'];
        $sql = "INSERT INTO students (name, roll_no, email) VALUES ('$name', '$roll', '$email')";
        if(mysqli_query($conn, $sql)){ echo "Data Saved!"; }
    }
    ?>
</body>
</html>