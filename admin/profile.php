<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require '../php-includes/connect.php';
require 'php-includes/check-login.php';
$query = "SELECT * FROM admin WHERE email= ? limit 1";
$stmt = $db->prepare($query);
$stmt->execute(array($_SESSION['email']));
$rows = $stmt->fetch(PDO::FETCH_ASSOC);
if ($stmt->rowCount()>0) {
    $names=$rows['names'];
    $email=$rows['email'];
    $address=$rows['address'];
    $telephone=$rows['phone'];
}
if(isset($_POST['update'])){
$uaddress=$_POST['address'];
$uphone=$_POST['phone'];
$cpassword=md5($_POST['cpassword']);
$apassword=md5($_POST['apassword']);
if ($apassword == $cpassword){
    if($apassword == $cpassword){
        $sql ="UPDATE admin SET address = ?, phone = ? , password = ? WHERE email = ?";
        $stm = $db->prepare($sql);
        if ($stm->execute(array($uaddress, $uphone, $cpassword, $_SESSION['email']))) {
            print "<script>alert('your data updated');window.location.assign('profile.php')</script>";

            }
    } else{
        echo "<script>alert('Passwords are not match');window.location.assign('profile.php')</script>";
    }
} else{
    echo "<script>alert('Passwords are not match');window.location.assign('profile.php')</script>";
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
    Egg correction
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
        <div class="row">
                    <div class="row">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form method="post">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Names</label>
                        <input type="text" class="form-control" disabled="" value="<?php echo $names?>">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" disabled="" value="<?php echo $email?>" value="michael23">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="number" class="form-control" value="<?php echo $telephone?>" name="phone">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $address?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="apassword">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Comfirm password</label>
                        <input type="password" class="form-control" name="cpassword">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name="update" class="btn btn-primary btn-round">Update Profile</button>
                    </div>
                  </div>
                </form>
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