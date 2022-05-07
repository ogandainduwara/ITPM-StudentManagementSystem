
<?php 
 require_once "../config.php";
 
    $Full_Name="";
    $Student_Number="";
    $year="";
    $Gender="";
 ?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="styles/R.css">
	
	<title>Mobile Phone Cart</title>
	
	<script>
	
	document.write(Date());
	
	</script>
	
	<script src="js/R.js"></script>
	
</head>
<body>
<div class="form"  >
<form action="../user.php" method="get" onsubmit="return validPwd()"> 

<p>Full Name</p>
<input type="text" id="button" placeholder="  Name with initials" name="FullName" required value="<?php echo $Full_Name; ?>"><br>
<p>Student Number</p>
<input type="text" id="button" placeholder="  Name with initials" name="StudentNumber" required value="<?php echo $Student_Number; ?>"><br>

<!-- <p>Mobile Number</p>
<input type="phone" pattern="[0-9]{10}" id="button" placeholder=" Mobile No"  name="MobileNumber" value="<?php echo $Mobile_Number; ?>"><br>
<p>Email</p>
<input type="email" pattern="[A-Za-z0-9+%_-]+@[a-zA-Z]+\.[a-z]{2,3}" id="button" name="Email" placeholder="  abc@mail.com" required value="<?php echo $Email; ?>">
<br>
<p>Address</p>
<textarea id="add" rows="3" cols="33" name="Address"  value="<?php echo $Address; ?>"></textarea> 
<br> -->

<!-- <div class="form-group"> -->
        <!-- <label for="name">Year</label> -->
        <p>Year</p>
        <select class="form-control " name ="year" data-toggle="dropdown" id="vahicle_type" >
            <option value="">--select--</option>
            <option value="2022/2023/2024">2022/2023/2024</option>
            <option value="2021/2022/2023">2021/2022/2023</option>
            <option value="2019/2020/2021">2019/2020/2021</option>
        </select>

        <!-- <input type="text" class="form-control" name="vtype"  value="<?PHP echo $year;?>" required/> -->
        <!-- <?PHP if(isset($errors_array['year'])){
            ?>
            <div class="viewError" style="color:red">Please Select Valid Type</div>
        <?PHP }?> -->
        
       
      <!-- </div> -->
<p>Gender <input type="radio" name="gender" placeholder="male"  > male
<input type="radio" name="gender" placeholder="female" name="Gender" value="<?php echo $Gender; ?>"> female</p>
<p>Password</p>
<input type="password" name="Password1" id="pwd1" name=" Password1" placeholder="  * * * * * * * * * *" required><br>
<p>Re-enter Password</p>
<input type="password" name="Password2" id="pwd2" name="Password2" placeholder="  * * * * * * * * * *" required >
<hr>
<input type="checkbox" id="cb1" onclick="check()"> Accept privacy policy and terms<br><br>
<center><a href="../LogoutH/home.html"><input type="submit" id="sub1" disabled></center><br>
    <P></p>
</form></div>

</body>
</html>