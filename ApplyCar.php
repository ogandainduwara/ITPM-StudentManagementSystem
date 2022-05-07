<?php
 include "connect.php";
 $values_array = array();
 $errors_array = array();
 if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $stmt = $db->prepare('SELECT * FROM carpark WHERE id =?');
    $stmt->execute([$_GET['id']]);
    $record = $stmt->fetch();
    if(!$record==false){
        $update =true;
        $values_array['stuid'] = $record['stuid'];
        $values_array['aname'] = $record['aname'];
        $values_array['fname'] = $record['fname'];
        $values_array['vtype'] = $record['vtype'];
        $values_array['payment'] = $record['payment'];
        $values_array['file'] = $record['dp'];
    }else{
        $update =false;
    }
    
     
 }else{
     $update =false;
 }
if(isset($_POST["submit"])){

    
    
    
    if(isset($_POST['stuid']) && strlen($_POST['stuid'])>0 && strlen($_POST['stuid'])<100){
        $values_array['stuid'] = $_POST['stuid'];
    }else{
        $errors_array['stuid'] = 'INVALID';
    }if(isset($_POST['aname']) && strlen($_POST['aname'])>0 && strlen($_POST['aname'])<100){
        $values_array['aname'] = $_POST['aname'];
    }else{
        $errors_array['aname'] = 'INVALID';
    }
    if(isset($_POST['fname']) && strlen($_POST['fname'])>0 && strlen($_POST['fname'])<100){
        $values_array['fname'] = $_POST['fname'];
    }else{
        $errors_array['fname'] = 'INVALID';
    }
    if(isset($_POST['vtype']) && strlen($_POST['vtype'])>0 && strlen($_POST['vtype'])<100){
        $values_array['vtype'] = $_POST['vtype'];
    }else{
        $errors_array['vtype'] = 'INVALID';
    }
    if(isset($_POST['payment']) && strlen($_POST['payment'])>0 && strlen($_POST['payment'])<100){
        $values_array['payment'] = $_POST['payment'];
    }else{
        $errors_array['payment'] = 'INVALID';
    }


    if(isset($_FILES["file"]["name"]) && strlen($_FILES["file"]["tmp_name"])>3){

        $upload_dir="uploads/";
        $maxSize   =2000000;//2MB
        $type      =$_FILES["file"]["type"];
        $name      =$_FILES["file"]["name"];
        $tmp_name  =$_FILES["file"]["tmp_name"];
        $fileExtension =explode(".",$name);
        $fileExtension=end($fileExtension);
        //for a unique name
        $n1 =rand(1,10000);
        $n2=date("ymd");
        $n3=time();
        $newName=$n1.$n2.$n3.".".$fileExtension;
        $allowd_type = array('jpeg','png','webp', 'bmp', 'gif', 'pdf', 'jpg', 'doc', 'docx');
        if(in_array($fileExtension,$allowd_type)){
            $filePath=$upload_dir.$newName;//for example uplpads/car.gif
            if($_FILES["file"]["size"]>$maxSize){
                $errors_array['file'] = 'SIZE';
            }else{
                //we have valid upload 
                move_uploaded_file($tmp_name,$filePath);
                $values_array['file'] = $newName;
            }

        }else{
            $errors_array['file'] = 'INVALID';
        }

    }else{
        if($update==true){
            $values_array['file'] = $record['dp'];
        }else{
            $errors_array['file'] = 'INVALID';
        }
        
    }

    if(empty($errors_array)){
        if($update==true){
            $add=$db->prepare("UPDATE carpark SET stuid=?, aname=?,fname=?, vtype=?, payment=?, dp = ? WHERE id=?");
            $ok=$add->execute(array($values_array['stuid'],$values_array['aname'],$values_array['fname'],$values_array['vtype'],$values_array['payment'],$values_array['file'],$record['id']));
        }else{
            $add=$db->prepare("INSERT INTO carpark (stuid,aname,fname,vtype,payment,dp) VALUES (?,?,?,?,?,?)");
            $ok=$add->execute(array($values_array['stuid'],$values_array['aname'],$values_array['fname'],$values_array['vtype'],$values_array['payment'],$values_array['file']));
        }
        
        if($ok){
            echo "Save to Database";
            header("Refresh:2");
        }else{
            echo "No Saved";
        }
    }
    
    

}
 

?>

<!DOCTYPE html>
<html>

<head>
  <title><?PHP if($update==true){ echo "Update";}else{ echo "Add";}?> Assigment</title>
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
      <center>Apply For Car Park</center>
    </b>
  </h5>

  <div class="container">
    <form action="" method="post" enctype="multipart/form-data">

      <?php if (isset($_GET['error'])) { ?> 

        <div class="alert alert-danger" role="alert">
          <?php echo $_GET['error']; ?>
        </div>
      <?php } ?>

      <div class="form-group">
        <label for="name">Student ID</label>
        <input type="text" class="form-control" name="stuid"  value="<?PHP if(isset($values_array['stuid'])){ echo $values_array['stuid']; }?>" />
        <?PHP if(isset($errors_array['stuid'])){
            ?>
            <div class="viewError" style="color:red">Please enter Student ID</div>
        <?PHP }?>
        
       
      </div>
      <div class="form-group">
        <label for="name"> Name</label>
        <input type="text" class="form-control" name="aname"  value="<?PHP if(isset($values_array['aname'])){ echo $values_array['aname']; }?>" />
        <?PHP if(isset($errors_array['aname'])){
            ?>
            <div class="viewError" style="color:red">Please enter Name</div>
        <?PHP }?>
        </div>

        
      <div class="form-group">
        <label for="name">Faculty</label>
        <input type="text" class="form-control" name="fname"  value="<?PHP if(isset($values_array['fname'])){ echo $values_array['fname']; }?>" />
        <?PHP if(isset($errors_array['fname'])){
            ?>
            <div class="viewError" style="color:red">Please enter Faculty</div>
        <?PHP }?>
        
       
      </div>
      
      <div class="form-group">
        <label for="name">Vehicale Type</label>
        <select class="form-control " name ="vtype" data-toggle="dropdown" id="vahicle_type" >
            <option value="">--select--</option>
            <option value="Car">Car</option>
            <option value="Bike">Bike</option>
            <option value="Other">Other</option>
        </select>

        <!-- <input type="text" class="form-control" name="vtype"  value="<?PHP if(isset($values_array['vtype'])){ echo $values_array['vtype']; }?>" required/> -->
        <?PHP if(isset($errors_array['vtype'])){
            ?>
            <div class="viewError" style="color:red">Please Select Valid Type</div>
        <?PHP }?>
        
       
      </div>
      
      <div class="form-group">
        <label for="name">Payment</label>
        <input type="text" class="form-control" name="payment" id="valueset"  value="<?PHP if(isset($values_array['payment'])){ echo $values_array['payment']; }?>" />
        <?PHP if(isset($errors_array['payment'])){
            ?>
            <div class="viewError" style="color:red">Please enter Payment</div>
        <?PHP }?>
        
       
      </div>
      

      <div class="form-group">
        <label for="name">Enter Paid Slip </label>
        <input type="file" class="form-control" name="file"  value="" <?PHP if($update==FALSE){?>/ <?PHP }?> >
        <?PHP if(isset($errors_array['file'])){
            if($errors_array['file']=="INVALID"){
            ?>
            <div class="viewError" style="color:red">Please select Paid Slip</div>
        <?PHP 
            }else{
                ?>
                <div class="viewError" style="color:red">Maximum file size is 2MB</div>
                <?PHP
            }
    
    }?>
      </div>

     


      <br>
    
      <hr>
     

      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      <input type="button" name="clear" value="Clear" class="btn btn-primary" onclick="window.location.href='ApplyCar.php'">
      



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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  </footer>
  
  <script>
    $( "#vahicle_type" ).change(function() {
      var value = $('#vahicle_type').val();
      if(value=='Car'){
        $('#valueset').val('2000');
      }else  if(value=='Bike'){
        $('#valueset').val('1000');
      }else{
        $('#valueset').val('1500');
      }
    });
  </script>
</body>

</html>