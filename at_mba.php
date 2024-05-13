<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <link rel="stylesheet" href="attendance.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php include('dbcon.php'); ?>
</head>
<body>
    <header>
        <div class="container">
            <h1>Attendance</h1>
            <nav>
                <ul>
                    <li><a href="landing.html">Home</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="attendance-table">
        <div class="container">
            <h2>MBA</h2>
            <table>
                <thead>
                    <tr>
                        <th>S. No.</th>
                        <th>Name of the Students</th>
                        <th>Roll Number</th>
                        <th>MBA1C01</th>
                        <th>MBA1C02</th>
                        <th>MBA1C04</th>
                        <th>MBA1C05</th>
                        <th>MBA1C07</th>
                        <th>MBA1C08</th>
                        <th>MBA1C09</th>
                        <th>MBA1C10</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $query = "SELECT * FROM mba_attendance";
                    $result = mysqli_query($connection, $query);

                    if (!$result) {
                        die("Query Failed: ".mysqli_error($connection));
                    } else {
                        while($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['s.no']; ?></td>
                        <td><?php echo $row['s_name']; ?></td>
                        <td><?php echo $row['s_roll']; ?></td>
                        <td><?php echo $row['MBA1C01']; ?></td>
                        <td><?php echo $row['MBA1C02']; ?></td>
                        <td><?php echo $row['MBA1C04']; ?></td>
                        <td><?php echo $row['MBA1C05']; ?></td>
                        <td><?php echo $row['MBA1C07']; ?></td>
                        <td><?php echo $row['MBA1C08']; ?></td>
                        <td><?php echo $row['MBA1C09']; ?></td>
                        <td><?php echo $row['MBA1C10']; ?></td>
                    </tr>
                <?php 
                        }
                    }
                ?>
                </tbody>
            </table>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; Department Management System</p>
        </div>
    </footer>
</body>
</html>
