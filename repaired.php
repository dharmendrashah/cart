<?php
$model = $_GET['Model'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apple";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
if($model==true){
  $query = "SELECT * FROM table_3 WHERE model = '$model'";
  $data = mysqli_query($conn, $query);
  $total = mysqli_num_rows($data);
}else{
  header('Location: get-repaired.php?there_is_no_any_data_in_our_record');
}
if($total==1){
try{ 
    $pdo = new PDO("mysql:host=localhost;dbname=apple", "root", ""); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE,  
                        PDO::ERRMODE_EXCEPTION); 
} catch(PDOException $e){ 
    die("ERROR: Could not connect. "  
                    . $e->getMessage()); 
} 
try{ 
    $sql = "SELECT * FROM table_3 WHERE model='$model'";  
    $res = $pdo->query($sql); 
    if($res->rowCount() > 0){ 
        while($row = $res->fetch()){ 
                //echo $row['sku'];
                $sku = $row['sku'];
                $model = $row['model'];
                $charging = $row['charging'];
                $diagnostic = $row['diagnostic'];
                $screen = $row['screen'];
                $water = $row['water'];
                $camera = $row['camera'];
                $earspeaker = $row['earspeaker'];
                $frame = $row['frame'];
                $headphone = $row['headphone'];
                $homebtn = $row['homebtn'];
                $mic = $row['mic'];
                $network = $row['network'];
                $other = $row['other'];
                $sensor = $row['sensor'];
                $software = $row['software'];
                $speaker = $row['speaker'];
                $volumebtn = $row['volumebtn'];
                $filesdestination = $row['filesdestination'];
                 ?>
<?php /*echo $sku;echo $model;echo $charging;echo $screen;echo $water;echo $earspeaker;echo $frame;echo $headphone;echo $homebtn;echo $mic;echo $network;echo $other;echo $sensor;echo $software;echo $speaker;echo $volumebtn;echo $filesdestination;*/ ?>
                 <!-- all the html code will place here-->
                 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <style>
  body { font-family:'Open Sans'}
  .badge-notify{
    background:red;
    position:relative;
    top: -20px;
    right: 10px;
  }
  </style>
</head>
<!-- navbar open -->
<nav class="navbar navbar-default navbar-fixed-top bg-dark navbar-dark" style="Text color: white, background-color: black">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Dashrath mobile care</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li ><a href="index.php">Home</a></li>
            <li class="active"><a href="Get-repaired.php">Repaire</a></li>
            <li><a href="about.php">About</a></li>
          </ul>
        </div>
      </div>
    </nav>
<!-- navbar closed -->
<br><br>
<body class="container">

  <div class="page-header">
    <h1>
      <div style="float: right; cursor: pointer;">
        <span class="glyphicon glyphicon-shopping-cart my-cart-icon">
        <span class="badge badge-notify my-cart-badge"></span></span>
      </div>
    </h1>
  </div>
  <div class="row">
    <div class="col-md-3 text-center">
      <img src="https://www.jqueryscript.net/demo/Simple-Shopping-Cart-Plugin-With-jQuery-Bootstrap-mycart/images/img_1.png" width="150px" height="150px">
      <br>
      product 1 - <strong>$10</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="1" data-name="product 1" data-summary="summary 1" data-price="10" data-quantity="1" data-image="https://www.jqueryscript.net/demo/Simple-Shopping-Cart-Plugin-With-jQuery-Bootstrap-mycart/images/img_1.png">Add to Cart</button>
      <a href="#" class="btn btn-info">Details</a>
    </div>

    <div class="col-md-3 text-center">
      <img src="https://www.jqueryscript.net/demo/Simple-Shopping-Cart-Plugin-With-jQuery-Bootstrap-mycart/images/img_2.png" width="150px" height="150px">
      <br>
      product 2 - <strong>$20</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="2" data-name="product 2" data-summary="summary 2" data-price="20" data-quantity="1" data-image="https://www.jqueryscript.net/demo/Simple-Shopping-Cart-Plugin-With-jQuery-Bootstrap-mycart/images/img_2.png">Add to Cart</button>
      <a href="#" class="btn btn-info">Details</a>
    </div>

    <div class="col-md-3 text-center">
      <img src="https://www.jqueryscript.net/demo/Simple-Shopping-Cart-Plugin-With-jQuery-Bootstrap-mycart/images/img_3.png" width="150px" height="150px">
      <br>
      product 3 - <strong>$30</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="3" data-name="product 3" data-summary="summary 3" data-price="30" data-quantity="1" data-image="https://www.jqueryscript.net/demo/Simple-Shopping-Cart-Plugin-With-jQuery-Bootstrap-mycart/images/img_3.png">Add to Cart</button>
      <a href="#" class="btn btn-info">Details</a>
    </div>

    <div class="col-md-3 text-center">
      <img src="https://www.jqueryscript.net/demo/Simple-Shopping-Cart-Plugin-With-jQuery-Bootstrap-mycart/images/img_4.png" width="150px" height="150px">
      <br>
      product 4 - <strong>$40</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="4" data-name="product 4" data-summary="summary 4" data-price="40" data-quantity="1" data-image="https://www.jqueryscript.net/demo/Simple-Shopping-Cart-Plugin-With-jQuery-Bootstrap-mycart/images/img_4.png">Add to Cart</button>
      <a href="#" class="btn btn-info">Details</a>
    </div>

    <div class="col-md-3 text-center">
      <img src="https://www.jqueryscript.net/demo/Simple-Shopping-Cart-Plugin-With-jQuery-Bootstrap-mycart/images/img_5.png" width="150px" height="150px">
      <br>
      product 5 - <strong>$50</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="5" data-name="product 5" data-summary="summary 5" data-price="50" data-quantity="1" data-image="https://www.jqueryscript.net/demo/Simple-Shopping-Cart-Plugin-With-jQuery-Bootstrap-mycart/images/img_5.png">Add to Cart</button>
      <a href="#" class="btn btn-info">Details</a>
    </div>

  </div>


  <script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type='text/javascript' src="jquery.mycart.js"></script>
  <script type="text/javascript">

  </script>

</body>
</html>

                 <!-- end of all html codes-->

                 <?php
        } 
        unset($res); 
    } else{ 
        echo "No records matching are found."; 
    } 
} catch(PDOException $e){ 
    die("ERROR: Could not able to execute $sql. "  
                                   . $e->getMessage()); 
} 
unset($pdo);
}else{
  header('Location: get-repaired.php?something_happen_wrong_try_again_later');
}
}
?>
