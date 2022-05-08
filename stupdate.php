<?php include 'php/stupdate.php'; ?>

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
  
  <br>
  <br>

  <h5><b>
      <center>Welcome to Our University</center>
    </b>
  </h5>

  <div class="container">
    <form action="php/stupdate.php" method="post">

      <h4 class="display-4 text-center">Update<h4>
          <hr>
          <hr>
          <?php if (isset($_GET['error'])) { ?>

            <div class="alert alert-danger" role="alert">
              <?php echo $_GET['error']; ?>
            </div>
          <?php } ?>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="sname" value="<?= $row['sname'] ?>" id="sname">
          </div>

          <div class="form-group">
            <label for="name">DOB</label>
            <input type="date" class="form-control" id="dob" name="dob" value="<?= $row['dob']  ?>">
          </div>

          <div class="form-group">
        <label for="name">Sex     </label><br>
        <input type="radio"  name="gender" value="Male" id="gender" <?PHP if($row['gender']=='Male'){ echo  'Checked';}?>/>Male
        <input type="radio" name="gender" value="Female" id="gender" <?PHP if($row['gender']=='Female'){ echo  'Checked';}?>/>Female
      </div>

          <div class="form-group">
            <label for="name">Email</label>
            <input type="email" class="form-control"  name="smail" value="<?= $row['smail']  ?>"  id="smail" >
          </div>
          <div class="form-group">
            <label for="name">Address</label>
            <input type="text" class="form-control"  name="saddress" value="<?= $row['saddress']  ?>"  id="saddress" >
          </div>
          <div class="form-group">
            <label for="name">School</label>
            <input type="text" class="form-control"  name="sschool" value="<?= $row['sschool']  ?>"  id="sschool" >
          </div>

          <div class="form-group">
        <label for="name">Faculty</label>
        <select class="form-control " name ="ftype" data-toggle="dropdown"  id="ftype" >
            <option value="">--select--</option>
            <option value="IT" <?PHP if($row['ftype']=='IT'){ echo  "selected";}?>>IT</option>
            <option value="BM" <?PHP if($row['ftype']=='BM'){ echo  "selected";}?>>BM</option>
            <option value="Engineering" <?PHP if($row['ftype']=='Engineering'){ echo  "selected";}?>>Engineering</option>
        </select>
        
        </div>

        <div class="form-group">
        <label for="name">Course</label>
        <select class="form-control " name ="ctype" data-toggle="dropdown"   id="ctype" >
            <option value="">--select--</option>
            <option value="Car" <?PHP if($row['ctype']=='Car'){ echo  "selected";}?>>Software Engineering</option>
            <option value="Bike" <?PHP if($row['ctype']=='Bike'){ echo  "selected";}?>>Data Science</option>
            <option value="Other" <?PHP if($row['ctype']=='Other'){ echo  "selected";}?>>Business Management</option>
        </select>
        </div>

        <div class="form-group">
    <label for="phone">Mobile Number</label>
    <input type="phone" class="form-control" name= "phone" id="phone" value="<?= $row['phone']  ?> ">
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