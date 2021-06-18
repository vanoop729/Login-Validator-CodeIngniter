<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous" />

</head>
<body>
    <div class="card w-25 mt-5 p-3 text-center border border-primary" style="margin: 0 auto; font-weight: bold;"><h3>WELCOME</h3> 
   
        <h4 class="text-primary"> <?php echo $_SESSION['username'] ?> </h4> 
        <hr/>
        <a class="mt-3" href="<?php echo base_url();?>logout"><button class="btn btn-primary">Logout</button></a> 
    </div>
</body>
</html>