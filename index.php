<?php include('action.php'); ?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DPI Results</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="shortcut icon" href="https://dpi.gov.bd/wp-content/themes/dpi/images/icon.ico" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="table_area">

        <?php
        if (isset($_SESSION['message'])): ?>
          <div class="alert alert-<?= $_SESSION['message_type'] ?>" style="text-align:center;">
            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
          </div>
        <?php endif; ?>

        <h2 style="text-align: center; margin-bottom: 50px;">Dhaka Polytechnic Institute</h2>

        <!-- Search box -->
        <div style="width: 400px; margin-left: auto; margin-bottom: 40px">
          <form action="index.php" method="get">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search Result By Roll Number"
                aria-label="Search Result By Roll Number" name="roll">
              <button class="btn btn-outline-secondary" type="submit" name="search">Search</button>
            </div>
          </form>
        </div>

        <div>
          <?php
          if (isset($_GET['search'])) {
            $roll = $_GET['roll'];
            echo "<h4 style='text-align: left;'>Showing result for: $roll  </h4>";
          }
          ?>
        </div>
        <!-- Table -->
        <table class="table mt-3">
          <thead>
            <tr>
              <th scope="col">Student Name</th>
              <th scope="col">Roll</th>
              <th scope="col">Registration</th>
              <th scope="col">Total</th>
              <th scope="col">Percentage</th>
              <th scope="col">View</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $user;
            if (isset($_GET['search'])) {
              $roll = $_GET['roll'];
              $user = $mysqli->query("SELECT * FROM marksheet WHERE roll = $roll") or die($mysqli->error());
            } else {
              $user = $mysqli->query("SELECT * FROM  marksheet") or die($mysqli->error());
            }
            while ($row = $user->fetch_assoc()):
              ?>

              <tr>
                <td>
                  <?php echo $row['name']; ?>
                </td>
                <td>
                  <?php echo $row['roll']; ?>
                </td>
                <td>
                  <?php echo $row['registration']; ?>
                </td>
                <td>
                  <?php echo $row['total']; ?>
                </td>
                <td>
                  <?php echo $row['percentage']; ?>
                </td>
                <td> <a href="report.php?report=<?php echo $row['ID']; ?> " class="btn btn-info"
                    style="box-shadow: 3px 3px 8px lightgray;">View</a></td>
                <td> <a href="action.php?delete=<?php echo $row['ID']; ?>" class="btn btn-danger"
                    style="box-shadow: 3px 3px 8px lightgray;">Delete</a></td>

              </tr>

            <?php endwhile; ?>

          </tbody>
        </table>
        <a href="add.php" class="btn btn-success" style="display: flex; justify-content: center;">Add New</a>
      </div>
    </div>
    <!-- <div class="col-md-2"></div> -->
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>