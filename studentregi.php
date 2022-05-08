<!DOCTYPE html>
<html>

<head>
  <title> Student Registration</title>
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
  <h4><b>
      <center>Student Registration Form</center>
    </b>
  </h4>

  <div class="container">
    <form action="php/screate.php" method="post">

      <?php if (isset($_GET['error'])) { ?>

        <div class="alert alert-danger" role="alert">
          <?php echo $_GET['error']; ?>
        </div>
      <?php } ?>
      
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="sname" value="<?php if (isset($_GET['sname']))
                                                                        echo ($_GET['sname']); ?>" id="name" placeholder="Enter Your Name">
      </div>

      <div class="form-group">
        <label for="name">DoB</label>
        <input type="date" class="form-control" name="dob" value="<?php if (isset($_GET['dob']))
                                                                        echo ($_GET['dob']); ?>" id="name" placeholder="Enter Maintence ID">
      </div>

      <div class="form-group">
        <label for="name">Sex     </label><br>
        <input type="radio"  name="gender" value="Male" id="name" />Male
        <input type="radio" name="gender" value="Female" id="name"/>Female
      </div>



      <div class="form-group">
        <label for="name">Email</label>
        <input type="email" class="form-control" name="smail" value="<?php if (isset($_GET['smail']))
                                                                        echo ($_GET['smail']); ?>" id="name" placeholder="Enter Your Faculty">
      </div>

      <div class="form-group">
        <label for="name">Address</label>
        <input type="text" class="form-control" name="saddress" value="<?php if (isset($_GET['saddress']))
                                                                        echo ($_GET['saddress']); ?>" id="name" placeholder="Enter Your Address">
      </div>
      <div class="form-group">
        <label for="name">School</label>
        <input type="text" class="form-control" name="sschool" value="<?php if (isset($_GET['sschool']))
                                                                        echo ($_GET['sschool']); ?>" id="name" placeholder="Enter Your School">
      </div>
      <div class="form-group">
        <label for="name">Faculty</label>
        <select class="form-control " name ="ftype" data-toggle="dropdown"  >
            <option value="">--select--</option>
            <option value="IT">IT</option>
            <option value="BM">BM</option>
            <option value="Engineering">Engineering</option>
        </select>

        <!-- <input type="text" class="form-control" name="vtype"  value="<?PHP if(isset($values_array['ftype'])){ echo $values_array['ftype']; }?>" required/> -->
        <?PHP if(isset($errors_array['ftype'])){
            ?>
            <div class="viewError" style="color:red">Please Select Valid Type</div>
        <?PHP }?>

        </div>
        <div class="form-group">
        <label for="name">Course</label>
        <select class="form-control " name ="ctype" data-toggle="dropdown" >
            <option value="">--select--</option>
            <option value="Car">Software Enginering</option>
            <option value="Bike">Data Science</option>
            <option value="Other">Business Management</option>
        </select>

        <!-- <input type="text" class="form-control" name="vtype"  value="<?PHP if(isset($values_array['ctype'])){ echo $values_array['ctype']; }?>" required/> -->
        <?PHP if(isset($errors_array['ctype'])){
            ?>
            <div class="viewError" style="color:red">Please Select Valid Type</div>
        <?PHP }?>
  
        </div>
      <div class="form-group">
    <label for="phone">Mobile Number</label>
    <input type="tel" class="form-control" name= "phone"value="<?php if(isset($_GET['phone'])) 
                                                                         echo($_GET['phone']); ?>"  id="phone"   placeholder="Enter Phone Number">
    </div>


      <br>
      <br>

      <button type="submit" name="create" class="btn btn-primary">Submit</button>
      <input type="button" name="clear" value="Clear" class="btn btn-primary" onclick="window.location.href='studentregi.php'">
      <a href="stread.php" class="btn btn-primary"> view</a>



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