<?php
include('services/user/session.php');
?>
<html>

<head>
    <title>Marriage Registration Details</title>
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
            padding: 2px;
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
                <span style="color: aliceblue;font-weight: 500;font-size: 18px;font-family: 'Poppins', sans-serif;">
                    <?php
                    if ($_SESSION['admin'] == 1) {
                        echo $_SESSION['name']."<br>(Admin)";
                    } else {
                        echo $_SESSION['name'];
                    }
                    ?>
                </span>
                <li><a href="services/user/logout.php">Logout</a></li>
            </ul>
        </div>
    </nav><br><br><br><br><br><br>

    <center>
        <h2 style="text-decoration: underline;">MARRIAGE REGISTRATION DETAILS</h2>
    </center> <br> <br>

    <table>
        <tr>
            <th>User ID</th>
            <th>Place of Marriage</th>
            <th>Date of Marriage</th>
            <th>Bride Name</th>
            <th>Bride DOB</th>
            <th>Bride Address</th>
            <th>Bride Phone No</th>
            <th>Bride Email</th>
            <th>Bride Photo</th>
            <th>Bride/Groom Name</th>
            <th>Bride/Groom DOB</th>
            <th>Bride/Groom Address</th>
            <th>Bride/Groom Phone No</th>
            <th>Bride/Groom Email</th>
            <th>Bride/Groom Photo</th>
            <th>Proof</th>

        </tr>
        <?php
        $sql = "SELECT * FROM marriage_reg";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) > 0)
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['user_id']."</td>";
                echo "<td>".$row['place_of_marriage']."</td>";
                echo "<td>".$row['date_of_marriage']."</td>";
                echo "<td>".$row['bride_name']."</td>";
                echo "<td>".$row['bride_dob']."</td>";
                echo "<td>".$row['bride_housename'].", ".$row['bride_city'].", ".$row['bride_district'].", ".$row['bride_state']."</td>";
                echo "<td>".$row['bride_phno']."</td>";
                echo "<td>".$row['bride_email']."</td>";
                echo "<td><a href='".$row['bride_photo']."'>Download</a></td>";
                echo "<td>".$row['bride_groom_name']."</td>";
                echo "<td>".$row['bride_groom_dob']."</td>";
                echo "<td>".$row['bride_housename'].", ".$row['bride_city'].", ".$row['bride_district'].", ".$row['bride_state']."</td>";
                echo "<td>".$row['bride_groom_phno']."</td>";
                echo "<td>".$row['bride_groom_email']."</td>";
                echo "<td><a href='".$row['bride_groom_photo']."'>Download</a></td>";
                echo "<td><a href='".$row['proof']."'>Download</a></td>";
                echo "</tr>";

            }
        ?>
    </table>
</body>

</html>