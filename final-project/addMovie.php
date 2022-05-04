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
            <form action = "add-confirmed.php" method="post" style = "text-align:center">
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
                    input[type=submit] {
                    width: 50%;
                    background-color: #04AA6D;
                    color: white;
                    padding: 14px 20px;
                    margin: 8px 0;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                    }
                    input[type=file] {
                    width: 50%;
                    background-color: white;
                    color: black;
                    padding: 14px 170px;
                    margin: 8px 0;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                    }
                    input[type=date] {
                    width: 50%;
                    background-color: white;
                    color: black;
                    padding: 14px 170px;
                    margin: 8px 0;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                    }
                </style>
                <?php
                    $cinemaID = $_GET['cinema_id'];
                ?>

                <div class="container">                   
                    <div class="centered"> <br>
                        <h1> Adding a Movie... </h1> <br>
                        <input type="text" placeholder="Movie Name..." name="name" required><br>
                        <input type="text" placeholder="Director Name..." name="dir" required><br>
                        <input type="text" placeholder="Cast..." name="cast" required><br>
                        <input type="text" placeholder="Runtime..." name="time" required><br>

                        <select id="rating" name="rtg">
                            <option value="G">G</option>
                            <option value="PG">PG</option>
                            <option value="PG-13">PG-13</option>
                            <option value="18+">18+</option>
                            <option value="R">R</option>
                            <option value="NR">NR</option>
                            <option value="PG-16">PG-16</option>
                        </select><br>

                        <select id="language" name="lang">
                            <option value="English">English</option>
                            <option value="French">French</option>
                            <option value="Arabic">Arabic</option>
                        </select><br>


                        <input type="text" placeholder="Synopsis..." name="syn" required><br>
                        <input type="date" placeholder="Release Date..." name="rdate" required><br>
                        <input type = "file"  name = "image"> <br><br>

                        <input type = "hidden" name = "cinema_id" value = "<?php echo $cinemaID ?>">

                        <input type = "submit" name = "submit" value = "Add" style = "background-color:black"> <br><br>

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