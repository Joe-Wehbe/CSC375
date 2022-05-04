<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Final Project</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <style> 
            body {
                background-image: url("assets/background.jpg"); 
                background-color: #ffffff;
                background-repeat: repeat;
                background-size = 100%;

            }
        </style> 
		
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="navbar-brand"><a class="nav-link" aria-current="page" href="index.php">Current Movies</a></li>
                    <li class="navbar-brand"><a class="nav-link" href="ComingSoon.php">Coming Soon</a></li>
                    <li class="navbar-brand"><a class="nav-link active" href="admin.php">Admin</a></li>

                </ul>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="contactus.php">Contact us</a></li>
                    </ul>
				</div>
            </div>
        </nav>
        
        <div class="container" style = "text-align:center"> <br>
            <?php 
            include("connection.php");
            $email = $_POST['email'];
            $password = sha1($_POST['psw']);

            $query = $mysqli->prepare("Select * from administrators where email = ?");
            $query->bind_param("s",$email);
            $query->execute();
            $result = $query->get_result();

            if($result->num_rows > 0){
                $data = $result->fetch_assoc();
                if($data['password'] === $password){ ?>

                    <?php
                    $query1 = $mysqli->prepare("Select * from cinemas where id = ?");
                    $query1->bind_param("s",$data['cinema_id']);
                    $query1->execute();
                    $result1 = $query1->get_result();
                    $data1 = $result1->fetch_assoc();
                    ?>

                    <div class="row gx-4 gx-lg-5 align-items-center my-5">
                        <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="<?php echo $data1['image_path2'];?>" alt="Image Not found" /></div>
                        <div class="col-lg-5">
                            <h1 class="font-weight-light">Welcome back, <?php echo $data['first_name'], "!" ?></h1>
                            <h1><b> _______________________ </b></h1><br>
                            <h4><i> Administrator in <?php echo $data1['name'] ?> </i></h4>
                            
                        </div>
                    </div>
                    
                    <h1><b> Manage the Movies in <?php echo $data1["name"] ?> <h1></b>
                        <h2>
                            <a href = "addMovie.php?cinema_id= <?php echo $data['cinema_id'] ?>"> <br><br>
                               <button style = "text-decoration:none; color:white; background-color: #333333; border-radius: 5px; height: 60px; width: 500px">Add Movie </button>
                            </a>
                            <a href = "delete.php"><br><br>
                                <button style = "text-decoration:none; color:white; background-color: #333333; border-radius: 5px; height: 60px; width: 500px"> Delete Movie </button>
                            </a>
                            <a href = "update.php"><br><br>
                                <button style = "text-decoration:none; color:white; background-color: #333333; border-radius: 5px; height: 60px; width: 500px"> Update Movie </button>
                            </a>
                            <a href = "index.php"><br><br> 
                                <button style = "text-decoration:none; color:white; background-color: red; border-radius: 5px; height: 60px; width: 500px"> Log out </button>
                            </a>
                            <br> <br>
                        </h2>            

                <?php
                }else{ ?>
                    <style> 
                        body {
                            background-image: url("assets/main2.jpg"); 
                            background-color: #ffffff;
                            background-repeat: repeat;
                            background-size = 100%;

                        }
                    </style>
                    <form action = "login.php" method="post" style = "text-align:center">
                    <style>
                        input[type=text], select {
                        width: 50%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        display: inline-block;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-sizing: border-box;
                        }

                        input[type=password], select {
                        width: 50%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        display: inline-block;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-sizing: border-box;
                        }

                        /* Style the submit button */
                        input[type=submit] {
                        width: 50%;
                        background-color: red;
                        color: white;
                        padding: 14px 20px;
                        margin: 8px 0;
                        border: none;s
                        border-radius: 4px;
                        cursor: pointer;
                        }
                    </style>
                        
                    <div class="container">
                        
                        <div class="centered"> <br><br><br><br><br>
                            <h1> Signing in... </h1> <br>
                            <input type="text" placeholder="Enter Email" name="email" required><br><br>
                            <input type="password" placeholder="Enter Password" name="psw" required><br><br>
                            <input type = "submit" name = "submit" value = "Log in"> <br><br>

                        </div>
                                
                    </div> 

                </form>
                <h2 style = "color:red">
                <?php
                    echo "Incorrect email or password!";
                }
            }else { ?> </h2>
                <style> 
                        body {
                            background-image: url("assets/main2.jpg"); 
                            background-color: #ffffff;
                            background-repeat: repeat;
                            background-size = 100%;

                        }
                </style>
                <form action = "login.php" method="post" style = "text-align:center">
                    <style>
                        input[type=text], select {
                        width: 50%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        display: inline-block;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-sizing: border-box;
                        }

                        input[type=password], select {
                        width: 50%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        display: inline-block;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-sizing: border-box;
                        }

                        /* Style the submit button */
                        input[type=submit] {
                        width: 50%;
                        background-color: red;
                        color: white;
                        padding: 14px 20px;
                        margin: 8px 0;
                        border: none;s
                        border-radius: 4px;
                        cursor: pointer;
                        }
                    </style>
                        
                    <div class="container">
                        
                        <div class="centered"> <br><br><br><br><br>
                            <h1> Signing in... </h1> <br>
                            <input type="text" placeholder="Enter Email" name="email" required><br><br>
                            <input type="password" placeholder="Enter Password" name="psw" required><br><br>
                            <input type = "submit" name = "submit" value = "Log in"> <br><br>

                        </div>
                                
                    </div> 

                </form> <h2 style = "color:red">
                <?php
                echo "Incorrect email or password!";
            }
            ?></h2>
        </div> 
    </body>
</html>

