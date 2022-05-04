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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="contactus.php">Contact us</a></li>
                    </ul>
				</div>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="assets/mainImage.jpg" alt="Image Not found" width = 900 /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Welcome to CineLeb!</h1>
                    <p> <b> This is a website where you can browse any cinema in Lebanon, check the current movies or coming soon, stay up-to-date with the latest movies released, and many more features! </b></p>


                </div>
            </div>

            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><h4>Find below all the cinema locations in Lebanon</h4></div>
                
            </div>

            <form method="post" action = "search-cinema.php" style = "text-align:center" > <br>
                <input type="text" name="search" placeholder="Search Cinema..." style = "width: 600px; height: 75px; text-align:center">            
                <input type = "submit" name = "submit" value = "" style="border: 0; background: 0; ">
            </form> <br>

			<?php
			include("connection.php");
			$query = $mysqli->prepare("Select * from cinemas;");
			$query->execute();
			$array = $query->get_result();
			?>
					
			<!-- Content Row-->
			<div class="row gx-4 gx-lg-5">							
				<?php
				while($cinema = $array->fetch_assoc()){
				?> 

					<div class="col-md-4 mb-5">
						<div class="card h-100">
                            <a href = "view-movies.php?id= <?php echo $cinema["id"] ?>" style = "text-decoration:none; color:black">
                                                          
							    <div class="card-body">

								    <h2 class="card-title"><?php echo $cinema["name"]?></h2>
								    <img src="<?php echo $cinema["image_path"]; ?>" width='340' height='200'/>                                  
                                    
							    </div>
							    <div class="card-footer">
							        <h8> <b>Location: </b> <?php echo $cinema["location"]; ?> </h8> <br>
							        <h8> <b>Phone Number: </b> <?php echo $cinema["phone_number"]; ?> </h8> <br>
						            <h8> <b>Ticket Price: </b> <?php echo $cinema["ticket_price"]; ?> LBP</h8> <br>
							        <h8> <b>Rating: </b> <?php echo $cinema["rating"]; ?>/5 </h8>

							        <h3></h3>
                                </div> 
                                
                            </a>
				    
						</div>
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
