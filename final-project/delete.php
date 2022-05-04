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

        

        <h4>

            <form action = "search-delete.php" method="post" style = "text-align:center">

                <div class="container">                   
                    <div class="centered"> <br>
                        <h1> Delete a Movie</h1> 
                        <h3> _______________________________________________________________________________</h3> <br>

                            <input type="text" name="search" placeholder="Search Movie..." style = "width: 600px; height: 75px; text-align:center">            
                            <input type = "submit" name = "submit"value = "" style="border: 0; background: 0;"><br>
                       
                        <?php
                            include("connection.php");
                            $query = $mysqli->prepare("SELECT * FROM movies");
                            $query->execute();
                            $array = $query->get_result();
                            ?>
                
                            <div class="row gx-2 gx-lg-1">							
                                <?php
                                while($movies = $array->fetch_assoc()){
                                ?> 
                                    <div class="col-md-3 mb-0">						
                                        <a href = "deleteMovie.php?idMovie= <?php echo $movies["id"] ?>" style = "text-decoration:none; color:black">                           
                                            <div class="card-body">
                                                <img src="<?php echo $movies["image_path"]; ?>" width='300' height='400'/>                                                                    
                                            </div>                             
                                        </a>						
                                    </div>
                                <?php
                                }
                                ?>							
                            </div>		

                    </div>                        
                </div> 

            </form>
            

        </h4>

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
