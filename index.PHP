<!DOCTYPE html>
<html lang="en">

<head>
    <title>University Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>

        <form action="insert.php" method="POST">
            <h3>Registration Form</h3>
            <div>
                <label>First Name:</label>
                <input type="text" name="first_name" required>
            </div>

            <div>
                <label>Last Name:</label>
                <input type="text" name="last_name" required>
            </div>

            <div>
                <label>Mobile Number:</label>
                <input type="text" name="mobile" required>
            </div>

            <div>
                <label>Email:</label>
                <input type="email" name="email" required>
            </div>

            <div>
                <label>Date of Birth:</label>
                <input type="date" name="dob" required>
            </div>

            <div class="btnss">
                <button type="submit">Submit</button>
                <button type="reset">Reset</button>
            </div>
        </form>

        <hr>

        <table>
            <tr>
                <th>S.No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>DOB</th>
            </tr>

            <?php
    include "fetch.php";
    ?>
        </table>

    </section>
</body>

</html>