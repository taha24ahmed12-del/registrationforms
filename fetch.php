<?php
include "config.php";

$result = mysqli_query($conn, "SELECT * FROM students");

$sn = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$sn}</td>
            <td>{$row['first_name']}</td>
            <td>{$row['last_name']}</td>
            <td>{$row['mobile']}</td>
            <td>{$row['email']}</td>
            <td>{$row['dob']}</td>
          </tr>";
    $sn++;
}
?>
