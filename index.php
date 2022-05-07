<!DOCTYPE html>
<html>

<head>
  <title> maintence</title>
  <!-- Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="sstyle.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons" />



  <link rel="stylesheet" href="styles/footer.css">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>

<body>
  <link rel="stylesheet" type="text/css" href="styles/header.css">
  
  <br>
  <br>
  <h5><b>
      <center>Welcome to Our University</center>
    </b>
  </h5>

  <div class="container">
    <form action="php/create.php" method="post">

      <?php if (isset($_GET['error'])) { ?>

        <div class="alert alert-danger" role="alert">
          <?php echo $_GET['error']; ?>
        </div>
      <?php } ?>
      
      <div class="form-group">
        <label for="name">Your Name</label>
        <input type="text" class="form-control" name="yname" value="<?php if (isset($_GET['yname']))
                                                                        echo ($_GET['yname']); ?>" id="name" placeholder="Enter Your Name">
      </div>
      <div class="form-group">
        <label for="name">Your Faculty</label>
        <input type="text" class="form-control" name="yfaculty" value="<?php if (isset($_GET['yfaculty']))
                                                                        echo ($_GET['yfaculty']); ?>" id="name" placeholder="Enter Your Faculty">
      </div>
      <div class="form-group">
        <label for="name">Your Course</label>
        <input type="text" class="form-control" name="ycourse" value="<?php if (isset($_GET['ycourse']))
                                                                        echo ($_GET['ycourse']); ?>" id="name" placeholder="Enter Your Course">
      </div>
  


      <br>
      <br>

      <button type="submit" name="create" class="btn btn-primary">Submit</button>
      <input type="button" name="clear" value="Clear" class="btn btn-primary" onclick="window.location.href='index.php'">
      <a href="read.php" class="btn btn-primary"> view</a>



    </form>
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