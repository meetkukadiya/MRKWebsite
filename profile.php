<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="profile.css">
</head>
<body>


    <header>
        <img class="logo" src="Final Logo.png" alt="" height="70" width="60">
        <!-- <img class="slogan" src="name.png" alt="" height="50" width="150"> -->
        <ul>
            <li><a href="wpAfterLogin.html" id="headerHome">Home</a></li>
            <li><a href="#" style="color: rgb(255, 145, 0);">Profile</a></li>
        </ul>
    </header>

    <div class="container">
         <div class="main">
                <div class="row">
                    <div class="col-md-4 mt-1">
                        <div class="card text-center sidebar">
                            <div class="card-body">
                                <img src="1_blush.avif" alt="" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <?php
                                    $conn = mysqli_connect("localhost", "root", "");
                                    $db = mysqli_select_db($conn, "wp");

                                    $result= mysqli_query($conn , "SELECT * FROM wp_temp ");
                                    if(mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_array($result)) {
                                            $uname = $row['email'];
                                            // echo sizeof($row);
                                            // print_r($row);
                                        }
                                    }

                                    // mysqli_close($conn);
                                    // $conn1 = mysqli_connect("localhost", "root", "");
                                    // $db2 = mysqli_select_db($conn1, "wp");


                                    // echo $uname;

                                    $result1 = mysqli_query($conn, "SELECT * FROM `wp_login` WHERE email='$email' ");
                                    // echo mysqli_num_rows($result1);
                                    
                                    if(mysqli_num_rows($result1) > 0) {
                                        while($row1 = mysqli_fetch_array($result1)) {
                                            // echo sizeof($row1);
                                            $uname = $row1['username'];
                                            $email = $row1['email'];
                                            $pass = $row1['password'];
                                            // echo $pass;
                                            // print_r($row1);
                                        }
                                    }
                                    
                                    
                                    ?>
                                    <div class="circle">
                                        <center>
                                        <p class="rounded-circle"  style="background-color: #1d2026; color: white; height: 100px; width: 100px; text-align: center;">
                                             <font style="text-align: center; line-height: 100px; font-size: 50px; font-weight: 600;"><?php echo $profile ?></font> </p>
                                        </center>
                                    </div>
                                    <a href=""><?php echo $uname ?></a>
                                    <a href="signout.php">Signout</a>
                                    <a href="removeAccount.php">Remove Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 mt-1">
                        <div class="card mb-3 content">
                             <h1 class="m-3 pt-3">About</h1>
                             <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5>Name</h5>
                                    </div>
                                    <div class="col-md-9 text-secondary">
                                    <?php echo $uname ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5>Email</h5>
                                    </div>
                                    <div class="col-md- text-secondary">
                                    <?php echo $email ?>
                                    </div>
                                </div>
                                <hr>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5>Password</h5>
                                        </div>
                                        <div class="col-md-9 text-secondary">
                                            <?php echo $pass ?>
                                        </div>

                                    </div>
                             </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
    <script src="bootstrap.bundle.js"></script>
</body>
</html>