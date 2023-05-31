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

  <?php
  if (isset($_GET['edit'])) {
    $ID = $_GET['edit'];
    $result = $mysqli->query("SELECT * FROM marksheet WHERE ID=$ID") or die(mysqli->error());
    if (!empty($result)) {
      $row = $result->fetch_array();
      $name = $row['name'];
      $roll = $row['roll'];
      $registration = $row['registration'];
      $java = $row['java'];
      $surveillance = $row['surveillance'];
      $logic_system = $row['logic_system'];
      $web = $row['web'];
      $pcb = $row['pcb'];
      $operating = $row['operating'];


    }
  }
  ?>

  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 from_area">
      <div class="table_area">
        <h2 style="text-align: center;">Dhaka Polytechnic Institute</h2>
        <form action="action.php" method="post">
          <input type="hidden" name="ID" value="<?php echo $ID ?> ">
          <div class="mb-3">
            <label class="form-label">Student Name</label>
            <input type="text" class="form-control" placeholder="Enter Your Name" name="name"
              value="<?php echo $row['name'] ?> ">
          </div>
          <div class="mb-3">
            <label class="form-label">Student Roll</label>
            <input type="text" class="form-control" name="roll" placeholder="Enter Your Roll"
              value="<?php echo $row['roll'] ?> ">
          </div>

          <div class="mb-3">
            <label class="form-label">Student Registration</label>
            <input type="text" class="form-control" name="registration" placeholder="Enter Your Registration"
              value="<?php echo $row['registration'] ?> ">
          </div>
          <div class="mb-3">
            <label class="form-label">Java (60)</label>
            <input type="text" class="form-control" name="java" placeholder="Enter Your Java Number"
              value="<?php echo $row['java'] ?> ">
          </div>

          <div class="mb-3">
            <label class="form-label">Surveillance Security (30)</label>
            <input type="text" class="form-control" name="surveillance"
              placeholder="Enter Your Surveillance Security Number" value="<?php echo $row['surveillance'] ?> ">
          </div>
          <div class="mb-3">
            <label class="form-label">Logic System (90)</label>
            <input type="text" class="form-control" name="logic_system" plac e holder="Enter Your Logic System Number"
              value="<?php echo $row['logic_system'] ?> ">
          </div>

          <div class="mb-3">
            <label class="form-label">Web Development (100)</label>
            <input type="text" class="form-control" name="web" placeholder="Enter Your Web Development Number"
              value="<?php echo $row['web'] ?> ">
          </div>
          <div class="mb-3">
            <label class="form-label">PCB Design & Circuit (100)</label>
            <input type="text" class="form-control" name="pcb" placeholder="Enter Your PCB Design & Circuit Number"
              value="<?php echo $row['pcb'] ?> ">
          </div>
          <div class="mb-3">
            <label class="form-label">Operating System (60)</label>
            <input type="text" class="form-control" name="operating" placeholder="Enter Your Operating System Number"
              value="<?php echo $row['operating'] ?> ">
          </div>

          <button type="submit" class="btn btn-success me-3" style="box-shadow: 3px 3px 8px #157347;" name="edit">Update
          </button>
          <a href="index.php" class="btn btn-info" style="box-shadow: 3px 3px 8px #31D2F2;">View All Results</a>
        </form>



      </div>



    </div>





    <div class="col-md-3"></div>
  </div>












  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>