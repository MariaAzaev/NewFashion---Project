<?php

    include 'db.php';
    include 'config.php';

    if(!empty($_POST["loginName"])) {
        

        $query  = "SELECT * FROM tbl_users_205 WHERE user_name='" 
            . $_POST["loginName"] 
            . "' and user_password = '"
            . $_POST["loginPassword"]
            ."'";

        $result = mysqli_query($connection , $query);
        $row    = mysqli_fetch_array($result);

        if(is_array($row)) {
            

            session_start();
            $_SESSION["user_id"] = $row['user_id'];

            header('Location: '.URL.'listPageKim.html');
        } else {
            echo 'Authentication failed !';
            $message = "Invalid username or password !";
        }
    }
?>

<!doctype html>
  <html lang="he">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css" />

  <title>login</title>
</head>
<body>

  <div class="container w-70 mt-4 text-center">
    <img src="images/logo.png" class="website-logo-login" alt="logo" />
    <div class="container-fluid text-left login-container">
      <form method="post" action="listPageKim.html">
        <div class="form-group">
          <label for="usernameInput"><b>User name</b></label>
          <input type="text" class="form-control input-new-style" id="usernameInput" />
        </div>
        <div class="form-group">
          <label for="passwordInput"><b>Password</b></label>
          <input type="password" class="form-control input-new-style" id="passwordInput" />
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="rememberMe">
          <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>
  



  <div class="error-message">  <?php 
  if(isset($message)){
      echo $message;
    }; 
  ?>       <div class="col text-center">
  <button type="submit" class="btn input-new-style mt-2 fw-bold"><b>Login</b></button>
</div>
</form>
</div>
</div>


<?php 
    mysqli_close($connection);
    ?>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>