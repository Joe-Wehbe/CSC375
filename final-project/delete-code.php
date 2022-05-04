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
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>					
                        <li class="nav-item"><a class="nav-link" href="contactus.php">Contact us</a></li>
                    </ul>
				</div>
            </div>
        </nav>

         <!-- Page Content-->
         
			<?php
			include("connection.php");
            $movieId = $_GET['MovieId'];
			$query = $mysqli->prepare("Select * from movies where id = ?");
            $query->bind_param("s", $movieId);
			$query->execute();
			$array = $query->get_result();
			?>

			<!-- Content Row-->
				<?php
				while($info = $array->fetch_assoc()){
				?>         
                    <div class="container px-4 px-lg-5">
                        <!-- Heading Row-->
                        <div class="row gx-4 gx-lg-5 align-items-center my-5">
                            <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="<?php echo $info["image_path"]?>" alt="Image Not found" width = "450" /></div>
                            <div class="col-lg-5">
                                <h1 class="font-weight-light"><?php echo $info["name"] ?></h1>
                                <h1 class="font-weight-light">  ________________________________</h1> <br>
                                <h2> This movie has been deleted </h2><br>
                                <h2>                                  
                                    <a href = "index.php" style = "text-decoration:none; color:black">
                                        <button type="button" style = "text-decoration:none; color:white; background-color: #333333; border-radius: 5px; height: 60px; width: 200px">Return</button>
                                    </a>
                                </h2>
                            </div>                             
                        </div>
                    </div>                                                             
							                             
				<?php
				}
				?>	
                <?php

                include("connection.php");

                $query = $mysqli->prepare("DELETE FROM cinema_has_movies where movie_id = ?;");
                $query->bind_param("s", $movieId);
                $query->execute();

                $query = $mysqli->prepare("DELETE FROM movies where id = ?;");
                $query->bind_param("s", $movieId);
                $query->execute();

                ?>
						
            <br> 

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; Joe Wehbe 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

    </body>
</html>





