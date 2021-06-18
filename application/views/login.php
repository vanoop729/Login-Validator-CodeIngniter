<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anoop's Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous" />
</head>
<body>

<div style="width: 50%; margin: 0 auto;">
    <h1 class="text-center mt-2">Login</h1>

    <?php if(isset($_SESSION['error'])) { ?>
    <div class="alert alert-danger"> <?php echo $_SESSION['error']; ?> </div>
    <?php } ?>

    <?php
    echo validation_errors('<div class="alert alert-danger">', '</div>');
    ?>

    <form action="" method="POST">
        <div class="form-group mt-3">
                <label style="font-weight: bold" for="username">Username:</label>
                <input type="text" class="form-control" name="username" id="username">
        </div>

        <div class="form-group mt-2">
                <label style="font-weight: bold" for="password">Password:</label>
                <input type="password" class="form-control" name="password" id="password">
        </div>
        
        <div class="text-center">
        <button name="login" class="btn btn-primary mt-3">Login</button>
        </div>
        
        <p class="text-center mt-3">New User?
            <a href="<?php echo site_url('register/') ?>" style="text-decoration: none">Register</a>
        </p>
    </form>

</div>
    
</body>
</html>