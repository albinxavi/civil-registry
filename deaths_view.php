<?php
include('services/user/session.php');
?>
<html>

<head>
    <title>Death Registration Details</title>
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
                        echo $_SESSION['name']."<br>(Admin)";
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
        <h2 style="text-decoration: underline;">DEATH REGISTRATION DETAILS</h2>
    </center> <br> <br>

    <table>
        <tr>
            <th>User ID</th>
            <th>Deceased Name</th>
            <th>Deceased Sex</th>
            <th>Deceased Age</th>
            <th>Deceased Housename</th>
            <th>Deceased City</th>
            <th>Deceased District</th>
            <th>Deceased State</th>
            <th>Deceased Country</th>
            <th>Deceased Pin</th>
            <th>Date of Death</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Place of Death</th>
            <th>Cause Certificate ID </th>
            <th>Actual Cause</th>
            <th>Death Document</th>
        </tr>
        <?php
        $sql = "SELECT * FROM birth_reg";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) > 0)
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['user_id']."</td>";
                echo "<td>".$row['deceased_name']."</td>";
                echo "<td>".$row['deceased_sex']."</td>";
                echo "<td>".$row['deceased_age']."</td>";
                echo "<td>".$row['deceased_housename']."</td>";
                echo "<td>".$row['deceased_city']."</td>";
                echo "<td>".$row['deceased_district']."</td>";
                echo "<td>".$row['deceased_state']."</td>";
                echo "<td>".$row['deceased_country']."</td>";
                echo "<td>".$row['deceased_pin']."</td>";
                echo "<td>".$row['date_of_death']."</td>";
                echo "<td>".$row['father_name']."</td>";
                echo "<td>".$row['mother_name']."</td>";
                echo "<td>".$row['place_of_death']."</td>";
                echo "<td>".$row['cause_certificate_id']."</td>";
                echo "<td>".$row['actual_cause']."</td>";
                echo "<td>".$row['death_document']."</td>";
                echo "</tr>";

            }
        ?>
    </table>
</body>

</html>