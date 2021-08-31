<?php
    session_start();
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

    <title>DIU</title>
  </head>
  <body>

    <div class="container">
           <div class="row">
               
                <div class="col-md-12">
                <?php if(isset($_SESSION['error_msg'])){ ?>
                     <div class="alert alert-warning">
                        <strong>Warning!</strong><?php echo $_SESSION['error_msg']; ?>
                      </div>
                   <?php } ?>
                        <h1 class="sbi">Create an account</h1>

                <form action="confirmRegistration.php" method="POST">
                    <div class="form-check">
                            <label for="Name">Name</label>
                            <input type="text" required class="form-control" name="name" placeholder="Please enter your name.">
                        </div>
                        <div class="form-check">
                            <label for="Email">Email</label>
                            <input type="email" required class="form-control" name="email" placeholder="Please enter your email address.">
                        </div>

                        <div class="form-check">
                            <label for="Password">Password</label>
                            <input type="password" required class="form-control" name="password" placeholder="Please enter your password.">
                        </div>

                        <div class="form-check">
                            <label for="Password">Confirm Password</label>
                            <input type="password" required class="form-control" name="confirm_password" placeholder="Please reenter your password.">
                        </div>
                        <button type="submit" class="btn btn-success m-1" name="submit" >Register</button>
                        Already have an account? <a href="login.php" class="btn btn-link">Login</a>
                </form>
            </div>
        </div> 
</div>








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php unset($_SESSION['error']);  ?>
<?php unset($_SESSION['error_msg']);  ?>