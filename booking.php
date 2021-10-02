<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Booking Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="bookingstyle.css">
</head>
<body>
        <!--page design starts here-->
        <div class="container">
        <div class="row">
        <div class="col-md-10 offset=md-1">
        <div class="row">
        <div class="col-md-5 transaction-left">
            <img src="down.png" alt="">
            <h3>Look Me</h3>
            <p>incidunt in sapiente ab! Nobis placeat ducimus exercitationem impedit fugit.</p>
            <button type="button" class="btn btn-primary">Explore</button>
        </div>
            <div class="col-md-7 transaction-right">
            <h2>Book Here</h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="transaction-form">
        <div class="form-group">
            <input type="text" class="from-control" placeholder="Enter your username" name="name" required>
        </div>
        <div class="form-group">
            <input type="text" class="from-control" placeholder="Enter your Email" name="email" required>
        </div>
        <div class="form-group">
            <input type="text" class="from-control" placeholder="Enter your Phone" name="phone" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Book</button>
    </div>
</form>


<?php

$name       = "";
$email      = "";
$phone      = "";



if($_SERVER["REQUEST_METHOD"] == "POST"){
$name       = validate($_POST ["name"]);
$email      = validate($_POST ["email"]);
$phone      = validate($_POST ["phone"]);

echo "Name      :".$name."<br/>";
echo "email     :".$email."<br/>";
echo "phone     :".$phone;

}

function validate($data){
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}   
?>
    






     <!--Bootsstrap Java script starts here-->
     <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"
    ></script>
</body>
</html>