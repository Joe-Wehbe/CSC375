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
                    <li class="navbar-brand"><a class="nav-link active" href="ComingSoon.php">Coming Soon</a></li>
                    <li class="navbar-brand"><a class="nav-link" href="admin.php">Admin</a></li>

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

        <div class="container px-4 px-lg-5">

            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><h4>Movies that will be released soon</h4></div>
                
            </div>


            <form method="post" action = "search-comingS.php" style = "text-align:center" > <br>
                <input type="text" name="search" placeholder="Search Movie..." style = "width: 600px; height: 75px; text-align:center">            
                <input type = "submit" name = "submit" value = "" style="border: 0; background: 0;">
            </form> <br>

            <?php
		    include("connection.php");
            $name = $_POST["search"];
		    $query = $mysqli->prepare("SELECT * FROM movies where ((movies.language_id = (SELECT languages.id from languages where languages.language LIKE '%$name%'))
                                    OR (movies.id IN (SELECT movie_id FROM movie_has_genres where movie_has_genres.genre_id = (SELECT genres.id FROM genres WHERE genres.genre LIKE '%$name%'))) 
                                    OR (name LIKE '%$name%' OR cast LIKE '%$name%' OR director LIKE '%$name%' OR release_date LIKE '%$name%')) 
                                    AND release_date > (SELECT CURDATE() AS Today);");
		    $query->execute();
		    $array = $query->get_result();
		    ?>
		    <div class="row gx-2 gx-lg-1">							
			    <?php
			    while($movies = $array->fetch_assoc()){
			    ?> 
				    <div class="col-md-3 mb-0">						
                        <a href = "movieInfo.php?idMovie= <?php echo $movies["id"] ?>" style = "text-decoration:none; color:black">                           
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