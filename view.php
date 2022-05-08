<?php include 'php/view.php'; ?>

<!DOCTYPE html>
<html>

<head>
  <title> Update</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <link rel="stylesheet" href="sstyle.css">

  </header>

<body>

  <div class="container">
    <form action="php/view.php" method="post">


      <?php if (isset($_GET['error'])) { ?>

        <div class="alert alert-danger" role="alert">
          <?php echo $_GET['error']; ?>
        </div>
      <?php } ?>
      <div class="form-group">
        <label for="name">Maintence ID</label>
        <input type="text" readonly class="form-control" name="mainid" value="<?= $row['mainid'] ?>" id="name">
      </div>


      <div class="form-group">
        <label for="address">client ID</label>
        <input type="text" class="form-control" id="address" name="clientid" readonly value="<?= $row['clientid']  ?>">
      </div>

      <div class="form-group">
        <label for="delivery">Last Maintenance Day</label>
        <input type="date" class="form-control" id="delivery" name="lastmain" readonly value="<?= $row['lastmain']  ?>">
      </div>
      <div class="form-group">
        <label for="phone">Next Maintenance Day</label>
        <input type="date" class="form-control" id="phone" name="nextmain" readonly value="<?= $row['nextmain']  ?>">
      </div>



      <br>
      <br>
      <input type="text" name="id" value="<?= $row['id'] ?>" hidden>

      <div class="link-right">
        <a href="index.php" class="btn btn-primary">back</a>
      </div>

    </form>
  </div>
</body>

</html>