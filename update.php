<?php include 'php/update.php'; ?>

<!DOCTYPE html>
<html>

<head>
  <title> Update</title>
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
  <div class="header">
    <img class="logo" src="image/logo.jpeg" alt="logo" width="80" height="80">

    <div class="header-right">
      <a class="active" href="#home">Home</a>
      <a href="#contact">Purchase Order</a>
      <a href="formgen.php">Maintenance Request</a>
      <a href="#contact">Payment</a>
      <a href="#contact">Delivery</a>
      <a href="#contact">Contact US</a>
      <div id="divProfile">
        <img id="imageProfile" src="image/userImg.png" alt="user">
      </div>
    </div>

  </div>
  <br>
  <br>

  <h5><b>
      <center>Welcome to Our University</center>
    </b>
  </h5>

  <div class="container">
    <form action="php/update.php" method="post">

      <h4 class="display-4 text-center">Update<h4>
          <hr>
          <hr>
          <?php if (isset($_GET['error'])) { ?>

            <div class="alert alert-danger" role="alert">
              <?php echo $_GET['error']; ?>
            </div>
          <?php } ?>
          <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" class="form-control" name="yname" value="<?= $row['yname'] ?>" id="yname">
          </div>


          <div class="form-group">
            <label for="name">Your Faculty</label>
            <input type="text" class="form-control"  name="yfaculty" value="<?= $row['yfaculty']  ?>"  id="yfaculty" >
          </div>

          <div class="form-group">
            <label for="name">Your Course</label>
            <input type="text" class="form-control" id="ycourse" name="ycourse" value="<?= $row['ycourse']  ?>">
          </div>
         



          <br>
          <br>
          <input type="text" name="id" value="<?= $row['id'] ?>" hidden>

          <button type="submit" name="update" class="btn btn-primary">Update</button>

    </form>
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