<?php include "php/stread.php";   ?>
<!DOCTYPE html>
<html>

<head>
  <title> Maintenance</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <link rel="stylesheet" href="sstyle.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons" />

  <title>Responsive Footer</title>

  <link rel="stylesheet" href="styles/footer.css">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">


</head>

<body>
  <link rel="stylesheet" type="text/css" href="styles/header.css">
  
  <br>
  <br>

  <h5><b>
      <center>Register Students</center>
    </b>
  </h5>


  <div class="container">
    <div class="box">
      <?php if (isset($_GET['success'])) { ?>

        <div class="alert alert-success" role="alert">
          <?php echo $_GET['success']; ?>
        </div>
      <?php } ?>
      <div class="form-group">
        <form action="search.php">
          <input type="text" name="search" placeholder="Enter Maintance ID">
          <input type="submit" value="Search">
      </div>
      <?php if (mysqli_num_rows($result)) { ?>


        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">DOB</th>
              <th scope="col">Sex</th>
              <th scope="col">Email</th>
              <th scope="col">Address</th>
              <th scope="col">School</th>
              <th scope="col">Faculty</th>
              <th scope="col">Course</th>
              <th scope="col">Mobile Number</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 0;
            while ($rows = mysqli_fetch_assoc($result)) {
              $i++;
            ?>

              <tr>
                <td><?php echo $rows['id']; ?></td>
                <td><?php echo $rows['sname'] ?></td>
                <td><?php echo $rows['dob']; ?></td>
                <td><?php echo $rows['gender'] ?></td>
                <td><?php echo $rows['smail']; ?></td>
                <td><?php echo $rows['saddress'] ?></td>
                <td><?php echo $rows['sschool']; ?></td>
                <td><?php echo $rows['ftype']; ?></td>
                <td><?php echo $rows['ctype']; ?></td>
                <td><?php echo $rows['phone']; ?></td>
               

                <td><a href="stupdate.php?id=<?= $rows['id'] ?>" class="btn btn-success">Update</a></td>
                <td><a href="stdelete.php?id=<?= $rows['id'] ?>" class="btn btn-danger">Delete</a></td>
                <td><a href="stview.php?id=<?= $rows['id'] ?>" class="btn btn-primary">View Details</a></td>
                

                </td>

              </tr>


            <?php   } ?>
          </tbody>
        </table>
      <?php   } ?>

      <div class="link-right">
        <a href="studentregi.php" class="btn btn-primary">back</a>
      </div>
    </div>
  </div>
  <footer class="footer-distributed">


    <div class="footer-right">
      <p class="footer-company-about">
        <span>Follow us on</span>
      </p>
      <div class="footer-icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
    <div class="footer-center">

    </div>


    <div class="footer-left">
      <div class="footer-company-name">
        <p>© Control print Ltd.</p>
        <p>234/A Makola Road,</p>
        <p>Kiribathgoda</p>
      </div>
    </div>
  </footer>
</body>

</html>