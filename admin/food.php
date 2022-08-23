<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require '../php-includes/connect.php';
require 'php-includes/check-login.php';
if(isset($_POST['save'])){
  $names=$_POST['names'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $sql ="INSERT INTO food (email,names,phone,address) VALUES (?,?,?,?)";
  $stm = $db->prepare($sql);
  if ($stm->execute(array($email,$names,$phone,$address))) {
      print "<script>alert('Food store added');window.location.assign('food.php')</script>";

  } else{
      echo "<script>alert('Error! try again');window.location.assign('food.php')</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Egg correction - Food store
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
<?php require 'php-includes/nav.php';?>
      <div class="content">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title">Food stores management</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Names
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Phone
                      </th>
                      <th>
                        Address
                      </th>
                      <th>
                      </th>
                    </thead>
                    <tbody>
                    <?php
                    $sql = "SELECT * FROM food";
                    $stmt = $db->prepare($sql);
                    $stmt->execute();
                    if ($stmt->rowCount() > 0) {
                        $count = 1;
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                      <tr>
                        <td>
                        <?php echo $row['names'];?>
                        </td>
                        <td>
                        <?php echo $row['email'];?>
                        </td>
                        <td>
                        <?php echo $row['phone'];?>
                        </td>
                        <td>
                        <?php echo $row['address'];?>
                        </td>
                        <td>
                        <form method="post"><button type="submit" class="btn btn-danger" id="<?php echo $row["id"];$sid=$row["id"]; ?>" name="delete">Delete</button></form>
                        </td>
                      </tr>
                      <?php
                        $count++;
                        }
                    }
                    if(isset($_POST['delete'])){
                        $sql ="DELETE FROM food WHERE id = ?";
                        $stm = $db->prepare($sql);
                        if ($stm->execute(array($sid))) {
                            print "<script>alert('Food store deleted');window.location.assign('food.php')</script>";
                
                        } else {
                            print "<script>alert('Fail');window.location.assign('food.php')</script>";
                        }
                    }
                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="row">
          <div class="col-md-12">
          <div class="row">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Add new food store</h5>
              </div>
              <div class="card-body">
              <form method="post">
        <div class="card-header py-6">
            <h6 class="m-0 font-weight-bold text-primary">Add food store</h6>
        </div>
        <div class="card-body">
        <div class="form-group input-group">
            <span class="input-group-addon" style="width:150px;">Names:</span>
            <input type="text" style="width:350px;" class="form-control" name="names">
        </div>
        <div class="form-group input-group">
            <span class="input-group-addon" style="width:150px;">Email:</span>
            <input type="email" style="width:350px;" class="form-control" name="email">
        </div>
        <div class="form-group input-group">
            <span class="input-group-addon" style="width:150px;">Phone:</span>
            <input type="text" style="width:350px;" class="form-control" name="phone">
        </div>
        <div class="form-group input-group">
            <span class="input-group-addon" style="width:150px;">Address:</span>
            <input type="text" style="width:350px;" class="form-control" name="address">
        </div>
        <button type="submit" class="btn btn-facebook btn-block" name="save">Add Food store</button>
        </div>
        </form>
              </div>
            </div>
            </div>
          </div>
        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>
</html>