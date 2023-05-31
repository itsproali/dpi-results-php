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
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <div class="table_area">
        <h2 style="text-align: center;">Dhaka Polytechnic Institute</h2>
        <form action="action.php" method="post">
          <div class="mb-3">
            <label class="form-label">Student name</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="name">
          </div>

          <div class="mb-3">
            <label class="form-label">Student Roll</label>
            <input type="text" class="form-control" name="roll" placeholder="Enter your Roll">
          </div>

          <div class="mb-3">
            <label class="form-label">Student Registration</label>
            <input type="text" class="form-control" name="registration" placeholder="Enter your registration">
          </div>

          <div class="mb-3">
            <label class="form-label">Java (60)</label>
            <input type="text" class="form-control" name="java" placeholder="Enter your Java Number">
          </div>

          <div class="mb-3">
            <label class="form-label">Surveillance Security (30)</label>
            <input type="text" class="form-control" name="surveillance"
              placeholder="Enter your Surveillance Security Number">
          </div>

          <div class="mb-3">
            <label class="form-label">Logic System (90)</label>
            <input type="text" class="form-control" name="logic_system" placeholder="Enter your Logic System Number">
          </div>

          <div class="mb-3">
            <label class="form-label">Web Development (100)</label>
            <input type="text" class="form-control" name="web" placeholder="Enter your Web Development Number">
          </div>

          <div class="mb-3">
            <label class="form-label">PCB Design & Circuit (100)</label>
            <input type="text" class="form-control" name="pcb" placeholder="Enter your PCB Design & Circuit Number">
          </div>

          <div class="mb-3">
            <label class="form-label">Operating System (60)</label>
            <input type="text" class="form-control" name="operating" placeholder="Enter your Operating System Number">
          </div>

          <button type="submit" class="btn btn-info" name="add"
            style="margin-bottom: 5%; box-shadow: 3px 3px 8px #31D2F2;">Add result</button>
        </form>
        <a href="index.php" class="btn btn-success" style="display: flex; justify-content: center;">Home</a>

      </div>
    </div>
    <div class="col-md-4"></div>

  </div>