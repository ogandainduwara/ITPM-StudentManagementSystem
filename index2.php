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
            <center>Urgent Maintenance Request Form</center>
        </b>
    </h5>

    <div class="container">
        <form action="php/create2.php" method="post">

            <?php if (isset($_GET['error'])) { ?>

                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php } ?>
            <div class="form-group">
                <label for="idm">Maintence ID</label>
                <input type="text" class="form-control" name="mainid" value="<?php if (isset($_GET['mainid']))
                                                                                    echo ($_GET['mainid']); ?>" id="name" placeholder="Enter Maintence ID">
            </div>


            <div class="form-group">
                <label for="id">client ID</label>
                <input type="text" class="form-control" id="address" name="clientid" value="<?php if (isset($_GET['clientid']))
                                                                                                echo ($_GET['clientid']); ?>" placeholder="Enter client ID">
            </div>

            <div class="form-group">
                <label for="last">Last Maintenance Day</label>
                <input type="date" class="form-control" id="lastmain" name="lastmain" value="<?php if (isset($_GET['lastmain']))
                                                                                                    echo ($_GET['lastmain']); ?>" placeholder="Enter Last Maintenance Day">
            </div>
            <div class="form-group">
                <label for="reason">Reason</label>
                <input type="tel" class="form-control" id="reason" name="reason" value="<?php if (isset($_GET['reason']))
                                                                                            echo ($_GET['reason']); ?>" required placeholder="Enter Next Maintenance Day">
            </div>


            <br>
            <br>

            <button type="submit" name="create" class="btn btn-primary">Submit</button>
            <input type="button" name="clear" value="Clear" class="btn btn-primary" onclick="window.location.href='index2.php'">
            <a href="read2.php" class="btn btn-primary"> view</a>



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