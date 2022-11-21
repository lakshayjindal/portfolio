<?php
$insert = false;
if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server,$username,$password);
    if(!$con){
        die("connection to the database failed due to " . mysqli_connect_error());
    }
    $email = $_POST['clientemail'];
    $name = $_POST['clientname'];
    $password = $_POST['phone'];
    $checkbox = $_POST['isclient'];
    $sql = "INSERT INTO `portfolio`.`contact` (`email`, `name`, `phone`, `check`) VALUES ('$email', '$name', '$password', '$checkbox');";
    echo $sql;
    if($con->query($sql) == true){
        // echo "Successfully inserted";
        $insert = true;
    }
    else {
        echo "ERROR: $sql <br> $con->error";
    }
    
    $con->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lakshay Jindal</title>
</head>
<body>
    <div class="container">
        <div class="sidebar sidebargo">
            <nav>
                <ul>
                    <li><a href="index.html">Home</a> </li>
                    <li><a href="intro.html">My Intro</a></li>
                    <li><a href="service.html">Services</a> </li>
                    <li><a href="blog.html">Blogs</a> </li>
                    <li><a href="contact.php">Contact Us</a> </li> 
                </ul>
            </nav>
              
          </div>
      </div>
        <div class="main">
          <div class="hamburger">
            <img src="images/menu.png" alt="" class="ham">
            <img src="images/close.png" alt="" class="cross">
          </div>
            <div class="contactform">
                <h1>Contact me For work / General Enquiries</h1>
                <form method="post" action="contact.php">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="clientemail" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email and Phone with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input type="name" class="form-control" id="clientname" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="clientphone" class="form-label">Phone Number</label>
                      <input type="phone" class="form-control" id="phone">
                    </div>
                    <div class="mb-3" id="form-check">
                      <input type="checkbox" class="form-check-input" id="isclient">
                      <label class="form-check-label" for="isclient">I want you to work on a project with me</label>
                    </div>
                    <button type="submit" class="btn-sm btn-primary" id="submit">Submit</button>
                  </form>
            </div>
        </div>
        <script src="script.js"></script>
</div>
</body>
</html>