<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require '../php-includes/connect.php';
require 'php-includes/check-login.php';
if(isset($_POST['send'])){
  $messege=$_POST['messege'];
  $sql ="INSERT INTO help (send,mess,farmer,admin) VALUES ('0',?,'1','1')";
  $stm = $db->prepare($sql);
  if ($stm->execute(array($messege))) {
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
    Egg correction - help
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
        <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title">Send a messege</h4>
              </div>
              <div class="card-body">
                <?php
                $sql = "SELECT * FROM help WHERE send = '1' ORDER BY id ASC";
                $stmt = $db->prepare($sql);
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    $count = 1;
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <div class="typography-line">
                  <p><span>Farmer <br><?php echo $row['time']?></span>
                <?php echo $row['mess']?>
                  </p>
                </div>
                <?php
                    $count++;
                }
                }
                $sql = "SELECT * FROM help WHERE send = '0' ORDER BY id ASC";
                $stmt = $db->prepare($sql);
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    $count = 1;
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <div class="typography-line">
                  <p><span>You<br><?php echo $row['time']?></span>
                    <?php echo $row['mess']?>
                  </p>
                </div>
                <?php
                $count++;
              }
              }
              ?>
              </div>
              <form method="post">
              <div class="form-group">
                <label>Send messege</label>
                <input type="text" class="form-control" name="messege">
              </div>
              <div class="update ml-auto mr-auto">
                <button type="submit" name="send" class="btn btn-primary btn-round">Send</button>
              </div>
              </form>
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