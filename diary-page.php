<?php
session_start();
echo "welcome".$_SESSION['email'];

if($_POST['log-out'] == '1'){

  $_SESSION['email'] = "";
  header("Location: index.php");//page to redirect to with the value of session variable

}

$error = "";
$user = "root";
$pass = "";
$db = "mydb";
$db = new mysqli("localhost",$user,$pass,$db) or die("Unsucessfull");//skips the rest script in case db is not connected
$sql = "INSERT INTO entry FROM mydiary WHERE email='".mysqli_real_escape_string($db,$_POST['sign-in-email'])."'AND password='".$_POST['sign-in-password']."';";

    $result = mysqli_query($db,$sql);

if(mysqli_query($db,$sql)){

      echo "query done";
    $row = mysqli_fetch_array(mysqli_query($db,$sql));


}else{

    $error =  "Unable to Sign In";

}


?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>My Diary</title>

</head>
<body>
  <form method="post">
    <button type="submit" id="but1" name="log-out">Log Out</button><br>
  </form>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script type="text/javascript">


  </script>
</body>
</html>
