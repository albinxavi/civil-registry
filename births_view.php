<?php
include('services/user/session.php');
?>
<html>

<head>
    <title>Birth Registration Details</title>
    <link rel="stylesheet" href="./style.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style type="text/css">
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
        }

        label {
            font-weight: bold;
            width: 100px;
            font-size: 14px;
        }

        .box {
            border: #666666 solid 1px;
            width: 100%;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            margin: 5px;
            text-align: center;
        }
    </style>

</head>



<body bgcolor="#FFFFFF">
    <nav>
        <div class="menu">
            <div class="logo">
                <a href="/admin_home.php">Civil Registry</a>
            </div>

            <ul>
                <label style="color: aliceblue;">
                    <?php
                    if ($_SESSION['admin'] == 1) {
                        echo $_SESSION['name'] . "<br>(Admin)";
                    } else {
                        echo $_SESSION['name'];
                    }
                    ?>
                </label>
                <li><a href="services/user/logout.php">Logout</a></li>
            </ul>
        </div>
    </nav><br><br><br><br><br><br>

    <center>
        <h2 style="text-decoration: underline;">BIRTH REGISTRATION DETAILS</h2>
    </center> <br> <br>

    <table>
        <tr>
            <th>User ID</th>
            <th>Date of Birth</th>
            <th>Child Name</th>
            <th>Child Sex</th>
            <th>Place of Birth</th>
            <th>Birth Weight</th>
            <th>Mother's Name</th>
            <th>Mother's Age</th>
            <th>Father's Name</th>
            <th>Father's Age</th>
            <th>Birth Housename</th>
            <th>Birth City</th>
            <th>Birth District</th>
            <th>Birth State</th>
            <th>Delivery Method</th>
            <th>Birth Proof</th>
        </tr>
        <?php
        $sql = "SELECT * FROM birth_reg";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) > 0)
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['user_id']."</td>";
                echo "<td>".$row['dob']."</td>";
                echo "<td>".$row['child_name']."</td>";
                echo "<td>".$row['child_sex']."</td>";
                echo "<td>".$row['place_of_birth']."</td>";
                echo "<td>".$row['birth_weight']."</td>";
                echo "<td>".$row['mother_name']."</td>";
                echo "<td>".$row['mother_age']."</td>";
                echo "<td>".$row['father_name']."</td>";
                echo "<td>".$row['father_age']."</td>";
                echo "<td>".$row['birth_housename']."</td>";
                echo "<td>".$row['birth_city']."</td>";
                echo "<td>".$row['birth_district']."</td>";
                echo "<td>".$row['birth_state']."</td>";
                echo "<td>".$row['delivery_method']."</td>";
                echo "<td>".$row['birth_proof']."</td>";
                echo "</tr>";

            }
        ?>

    </table>
</body>

</html>