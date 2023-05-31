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
  if (isset($_GET['report'])) {
    $ID = $_GET['report'];
    $result = $mysqli->query("SELECT * FROM marksheet WHERE ID=$ID") or die(mysqli->error());
    if (!empty($result)) {
      $row = $result->fetch_array();


    }
  }
  ?>


  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 from_area">
      <div class="table_area">

        <h2 style="text-align: center;"> Dhaka Polytechnic Institute </h2>
        <h4 style="text-align: center;">Final Exam</h4>
        <div class="row">
          <div class="col-md-6">
            <h5>Student Name:&nbsp;
              <?php echo $row['name'] ?>
            </h5>
          </div>
          <div class="col-md-6">
            <h5 class="roll">Student Roll:&nbsp;
              <?php echo $row['roll'] ?>
            </h5>
          </div>
        </div>

        <br>
        <br>
        <table class="table table-success table-striped-columns">

          <thead>
            <tr>

              <th scope="col">Subject</th>
              <th scope="col">Full Marks</th>
              <th scope="col">Obtain Marks</th>
              <th scope="col">Total</th>
              <th scope="col">Percentage</th>
            </tr>
          </thead>
          <tbody>
            <tr>

              <td>Java</td>
              <td>60</td>
              <td>
                <?php echo $row['java'] ?>
              </td>
              <td rowspan="8">
                <?php echo $row['total'] ?>
              </td>
              <td rowspan="8">
                <?php echo $row['percentage'] ?>
              </td>

            </tr>

            <tr>

              <td>Surveillance Security</td>
              <td>30</td>
              <td>
                <?php echo $row['surveillance'] ?>
              </td>


            </tr>
            <tr>

              <td>Logic System</td>
              <td>90</td>
              <td>
                <?php echo $row['logic_system'] ?>
              </td>


            </tr>
            <tr>

              <td>Web Development</td>
              <td>100</td>
              <td>
                <?php echo $row['web'] ?>
              </td>



            </tr>
            <tr>

              <td>PCB Design & Circuit</td>
              <td>100</td>
              <td>
                <?php echo $row['pcb'] ?>
              </td>


            </tr>
            <tr>

              <td>Operating System</td>
              <td>60</td>
              <td>
                <?php echo $row['operating'] ?>
              </td>


            </tr>

          </tbody>

        </table>

        <a href="add.php" class="btn btn-success" style="box-shadow: 3px 3px 8px #157347;">Add New </a>

        <a href="edit.php?edit=<?php echo $row['ID']; ?> " class="btn btn-warning mx-3"
          style="box-shadow: 3px 3px 8px #FFCA2C;">Edit</a>

        <a href="index.php" class="btn btn-info" style="box-shadow: 3px 3px 8px #31D2F2;">View Others </a>

      </div>



    </div>





    <div class="col-md-2"></div>
  </div>












  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>