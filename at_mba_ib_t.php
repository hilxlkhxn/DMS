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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
            <h2>MBA - International Business</h2>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Edit</button>
        </div>
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
                    $query = "SELECT * FROM mba_ib_attendance";
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
        <?php

        if(isset($_GET['message'])){
            echo "<h6>".$_GET['message']."</h6>";
        }


        ?>
         <?php

        if(isset($_GET['insert_msg'])){
        echo "<h6>".$_GET['insert_msg']."</h6>";
        }
        ?>
    </section>
    <!-- Modal -->
    <form action="insert_mba_ib_at.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="form-group">
                    <label for="s_name">Name of the Student</label>
                    <input type="text" name="s_name" class="form-control">
            </div>
            <div class="form-group">
                    <label for="s_roll">Roll Number</label>
                    <input type="text" name="s_roll" class="form-control">
            </div>
            <div class="form-group">
                    <label for="MBA1C01">MBA1C01</label>
                    <input type="text" name="MBA1C01" class="form-control">
            </div>
            <div class="form-group">
                    <label for="MBA1C02">MBA1C02</label>
                    <input type="text" name="MBA1C02" class="form-control">
            </div>
            <div class="form-group">
                    <label for="MBA1C04">MBA1C04</label>
                    <input type="text" name="MBA1C04" class="form-control">
            </div>            
            <div class="form-group">
                    <label for="MBA1C05">MBA1C05</label>
                    <input type="text" name="MBA1C05" class="form-control">
            </div>            
            <div class="form-group">
                    <label for="MBA1C07">MBA1C07</label>
                    <input type="text" name="MBA1C07" class="form-control">
            </div>            
            <div class="form-group">
                    <label for="MBA1C08">MBA1C08</label>
                    <input type="text" name="MBA1C08" class="form-control">
            </div>         
            <div class="form-group">
                    <label for="MBA1C09">MBA1C09</label>
                    <input type="text" name="MBA1C09" class="form-control">
            </div>
            <div class="form-group">
                    <label for="MBA1C10">MBA1C10</label>
                    <input type="text" name="MBA1C10" class="form-control">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="add_ib_students" value="ADD">
      </div>
    </div>
  </div>
</div>
    </form>
    <footer>
        <div class="container">
            <p>&copy; Department Management System</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
