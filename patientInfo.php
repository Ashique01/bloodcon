<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People who need blood</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">








    <style>
        table,
        th,
        td {
            border: 2px solid black;
        }

        th {
            background-color: grey;
        }
    </style>
</head>

<body>

    <header>
        <section style="background: rgb(155, 54, 54); color: rgba(0, 0, 0, 0.5);">
            <nav class="shift">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="donor.html">Donor</a></li>
                    <li><a href="patient.html">Patient</a></li>
                    <li><a href="donorInfo.php">Donors in your area</a></li>
                    <li><a href="aboutus.html">About Us</a></li>

                </ul>
            </nav>
        </section>
    </header>








    <table align="center">
        <tr>
            <th>Name </th>
            <th>Phone Number </th>
            <th>Region </th>
            <th>Blood Group </th>
            <th>Need</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "bloodcon");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT userName, phoneNumber, region, bloodGroup, necessity from patient";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["userName"] . "</td><td>" . $row["phoneNumber"] . "</td><td>" . $row["region"] . "</td><td>" . $row["bloodGroup"] . "</td><td>" . $row["necessity"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 result";
        }

        $conn->close();

        ?>

    </table>



















    <section class="bg-white mb-5 mt-2">
        <div class="mt-5">
            <div class="container-fluid">
                <div class="row">


                </div>
            </div>
    </section>

    <section style=" background-color: rgb(11, 14, 23);height: 30%;position: absolute;background-repeat:repeat-ys ;width:100%;">
        <h1 class="fs-3 text-center text-white mt-5 justify-content-center align-content-center"><span class="text-danger">Blood</span> Bank</h1>
        <p class="fs-6 text-center text-white">Donate <span class="text-danger">Blood </span>Save <span class="text-primary">Lives</span>.</p>
        <footer>
            <p class="text-center text-white mb-5">© 2021 Develop By BloodCon</p>
        </footer>
    </section>
</body>

</html>