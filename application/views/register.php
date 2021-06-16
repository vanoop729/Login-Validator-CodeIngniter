<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anoop's Register Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous" />
</head>
<body>

<div class="col-lg-5 offset-3">
    <h1 class="text-center mt-2">Registration</h1>
    <p class="text-center">Fill in the details to register:</p>

    <?php if(isset($_SESSION['success'])) { ?>
    <div class="alert alert-success"> <?php echo $_SESSION['success']; ?> </div>
    <?php } ?>

    <?php
    echo validation_errors('<div class="alert alert-danger">', '</div>');
    ?>

    <form action="" method="POST">
        <div class="form-group">
                <label style="font-weight: bold" for="username">Username:</label>
                <input type="text" class="form-control" name="username" id="username">
        </div>

        <div class="form-group mt-2">
                <label style="font-weight: bold" for="password">Password:</label>
                <input type="password" class="form-control" name="password" id="password">
        </div>
        
        <div class="form-group mt-2">
                <label style="font-weight: bold" for="password2">Confirm Password:</label>
                <input type="password" class="form-control" name="password2" id="password2">
        </div>

        <div class="text-center">
        <button name="register" class="btn btn-primary mt-3">Register</button>
        </div>
        
        <p class="text-center mt-3">Already Registered?
            <a href="<?php echo site_url('auth/login') ?>" style="text-decoration: none">Login</a>
        </p>
    </form>

</div>
    
</body>
</html>