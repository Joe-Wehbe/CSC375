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
                    <li class="navbar-brand"><a class="nav-link active" aria-current="page" href="#!">Current Movies</a></li>
                    <li class="navbar-brand"><a class="nav-link" href="ComingSoon.php">Coming Soon</a></li>
                    <li class="navbar-brand"><a class="nav-link" href="admin.php">Admin</a></li>

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
            $id = $_GET['idMovie'];
			$query = $mysqli->prepare("Select * from movies where id = ?");
            $query->bind_param("s", $id);
			$query->execute();
			$array = $query->get_result();
			?>

            <?php
			include("connection.php");
			$query3 = $mysqli->prepare("Select movie_has_genres.genre_id from movie_has_genres where movie_has_genres.movie_id = ?");
            $query3->bind_param("s", $id);
			$query3->execute();
			$array2 = $query3->get_result();
			?>

            <?php
			include("connection.php");
			$query5 = $mysqli->prepare("Select movie_has_showtimes.showtime_id from movie_has_showtimes where movie_has_showtimes.movie_id = ?");
            $query5->bind_param("s", $id);
			$query5->execute();
			$array3 = $query5->get_result();
			?>

			<!-- Content Row-->
				<?php
				while($info = $array->fetch_assoc()){
                            
                    $query1 = $mysqli->prepare("Select language from languages where id = ?");
                    $query1->bind_param("s", $info["language_id"]);
                    $query1->execute();
                    $result = $query1->get_result();
                    $oneRow = $result->fetch_assoc();

                    $query2 = $mysqli->prepare("Select rating from ratings where id = ?");
                    $query2->bind_param("s", $info["rating_id"]);
                    $query2->execute();
                    $result1 = $query2->get_result();
                    $oneRow1 = $result1->fetch_assoc();

				?> 

                    <div class="container px-4 px-lg-5">
                        <!-- Heading Row-->
                        <div class="row gx-4 gx-lg-5 align-items-center my-5">
                            <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="<?php echo $info["image_path"]?>" alt="Image Not found" width = "450" /></div>
                            <div class="col-lg-5">
                                <h1 class="font-weight-light"><?php echo $info["name"] ?></h1>
                                <h1 class="font-weight-light">  ________________________________</h1>
                                <h8> <b>Director: </b> <?php echo $info["director"]; ?> </h8> <br>
							    <h8> <b>Cast: </b> <?php echo $info["cast"]; ?> </h8> <br>
							    <h8> <b>Release Date: </b> <?php echo $info["release_date"]; ?> </h8> <br>
                                <h8> <b>Run time: </b> <?php echo $info["runtime"]; ?> </h8> <br>
                                <h8> <b>Rating: </b> <?php echo $oneRow1["rating"]; ?> </h8> <br>
                                <h8> <b>Genre:</b> 
                                <?php 
                                    while ($genres = $array2->fetch_assoc()){
                                        $query4 = $mysqli->prepare("Select * from genres where id = ?");
                                        $query4->bind_param("s", $genres["genre_id"]);
                                        $query4->execute();
                                        $result2 = $query4->get_result();
                                        $oneRow2 = $result2->fetch_assoc();
                                        echo $oneRow2["genre"]; ?> 
                                <?php
                                }
                                ?>
                                </h8> <br>                    
                                <h8> <b>Language: </b> <?php echo $oneRow["language"]; ?> </h8> <br>
                                <h8> <b>Synopsis: </b> <?php echo $info["synopsis"]; ?> </h8> <br> <br> <br>

                                <h5> <b>SHOWTIMES </b> </h5> <b>
                                <?php 
                                    while ($showtimes = $array3->fetch_assoc()){
                                        $query6 = $mysqli->prepare("Select * from showtimes where id = ?");
                                        $query6->bind_param("s", $showtimes["showtime_id"]);
                                        $query6->execute();
                                        $result3 = $query6->get_result();
                                        $oneRow3 = $result3->fetch_assoc();
                                        echo $oneRow3["time"]; ?> &nbsp; &nbsp;
                                <?php
                                }
                                ?> </b>

                            </div>                             
                        </div>
                    </div>                                                             
							                             
				<?php
				}
				?>							
        </div> <br> 

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