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
        <div class="container px-4 px-lg-5">

			<?php
			include("connection.php");
            $id = $_GET["id"];
			$query = $mysqli->prepare("Select cinema_has_movies.movie_id from cinema_has_movies where cinema_has_movies.cinema_id = ?");
            $query->bind_param("s", $id);
			$query->execute();
			$array = $query->get_result();
			?>

            <?php 
            $query2 = $mysqli->prepare("Select * from cinemas where id =?");
            $query2->bind_param("s", $id);
            $query2->execute();
            $array1 = $query2->get_result();
            $row = $array1->fetch_assoc();
            ?>

            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src=<?php echo $row["image_path"] ?> alt="Image Not found" width = 600/></div>          
                <div class="col-lg-5">
                    <h1 class="font-weight-light"> <?php echo $row["name"] ?> </h1>
                    <h1 class="font-weight-light"> ________________________________ </h1>
                    <h8> <b>Location: </b> <?php echo $row["location"]; ?> </h8> <br>
				    <h8> <b>Phone Number: </b> <?php echo $row["phone_number"]; ?> </h8> <br>
				    <h8> <b>Ticket Price: </b> <?php echo $row["ticket_price"]; ?> LBP</h8> <br>
				    <h8> <b>Rating: </b> <?php echo $row["rating"]; ?>/5 </h8>
                </div>
            </div>         
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><h4>Movies that are currenlty available to watch in <?php echo $row["name"] ?> </h4></div>

            </div>

			<!-- Content Row-->
			<div class="row gx-2 gx-lg-1">							
				<?php
				while($movies = $array->fetch_assoc()){

                    $query1 = $mysqli->prepare("Select * from movies where id=?");
                    $query1->bind_param("s",$movies["movie_id"]);
                    $query1->execute();
                    $result = $query1->get_result();
                    $oneRow = $result->fetch_assoc();
				?> 
					<div class="col-md-3 mb-0">						
                        <a href = "movieInfo.php?idMovie= <?php echo $oneRow["id"] ?>" style = "text-decoration:none; color:black">                           
							<div class="card-body">
								<img src="<?php echo $oneRow["image_path"]; ?>" width='300' height='400'/>                                                                    
							</div>                             
                        </a>						
					</div>
				<?php
				}
				?>							
			</div>		
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