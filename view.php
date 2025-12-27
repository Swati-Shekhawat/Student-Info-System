<?php include('db.php'); ?>
<h2>Registered Students List</h2>
<table border="1" cellpadding="10" cellspacing="0">
    <tr style="background-color: #f2f2f2;">
        <th>ID</th>
        <th>Name</th>
        <th>Roll No</th>
        <th>Email</th>
    </tr>
    <?php
    $res = mysqli_query($conn, "SELECT * FROM students");
    while($row = mysqli_fetch_array($res)) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['roll_no']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "</tr>";
    }
    ?>
</table>
<br>
<a href="index.php">Add New Student</a>


