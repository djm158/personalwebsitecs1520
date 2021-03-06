<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Dan's Final Project</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/index.css"> <!-- apply custom styles after bootstrap -->
  <link rel="stylesheet" href="./css/font-awesome.min.css">
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container-fluid">
      <!-- brand -->
      <div class="navbar-header">
        <a class="navbar-brand nav" href="">DM</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#portfolio">Portfolio</a>
          </li>
          <li>
            <a href="#about">About</a>
          </li>
          <li>
            <a href="#contact">Contact</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->

    </div>
    <!-- container fluid -->
  </nav>
  <!-- Header -->
  <header>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- <img class="img-responsive img-circle" src="images/electric-guitar.svg" alt=""> -->
          <div class="intro-text">
            <span class="name">Dan McGrath</span>
            <hr class="break">
            <br/>
            <span class="skills">Computer Engineer</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Portfolio Grid Section -->
  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>Portfolio</h2>
          <hr class="star-primary">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 portfolio-item text-center">
          <h3 class="portfolio-item-title">Solar System Simulation</h3>
          <a href="https://github.com/djm158/solarsystem" class="portfolio-link" data-toggle="modal">
            <div class="caption">
              <div class="caption-content">
                <i class="fa fa-search-plus fa-3x"></i>
              </div>
            </div>
            <div id="icon-wrapper">
              <img src="images/solarsystem.png" class="img-responsive" alt="">
            </div>
          </a>
        </div>
        <div class="col-sm-4 portfolio-item">
          <h3 class="portfolio-item-title">Gesture Controlled Quadcopter</h3>
          <a href="https://github.com/dgtc1012/ECE1160_Final_Project/tree/master/nrf24_cx10_pc" class="portfolio-link" data-toggle="modal">
            <div class="caption">
              <div class="caption-content">
                <i class="fa fa-search-plus fa-3x"></i>
              </div>
            </div>
            <div id="icon-wrapper">
              <img src="images/drone.png" class="img-responsive" alt="">
            </div>
          </a>
        </div>
        <div class="col-sm-4 portfolio-item">
          <h3 class="portfolio-item-title">Vim Plugins and Configurations</h3>
          <a href="https://github.com/djm158/.vim" class="portfolio-link" data-toggle="modal">
            <div class="caption">
              <div class="caption-content">
                <i class="fa fa-search-plus fa-3x"></i>
              </div>
            </div>
            <div id="icon-wrapper">
              <img src="images/vim.jpg" class="img-responsive" alt="">
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="success" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>About</h2>
          <hr class="break">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-lg-offset-2">
          <p>Hello! I'm Dan. I am currently a senior studying computer engineering at the University of Pittsburgh. My engineering interests lie somewhere between low level embedded software and web programming. Feel free to check out some of my work!</p>
        </div>
        <div class="col-lg-4">
          <p>Outside of engineering, I am a guitar player, runner, and avid reader.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>Contact Me</h2>
          <hr class="star-primary">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <form data-toggle="validator" role="form" action="index.php" method="post">
            <div class="form-group">
              <label for="inputName" class="control-label">Name</label>
              <input name="name" type="text" class="form-control" id="inputName" placeholder="Your name" required>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="control-label">Email</label>
              <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <label for="message" class="control-label">Message</label>
              <textarea name="message" rows="5" class="form-control" placeholder="Write me a message" id="message"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center">
    <div class="footer-above">
      <div class="container">
        <div class="row">
            <div class="footer-col col-md-12">
              <h3>Professional Things</h3>
              <ul class="list-inline">
                  <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                </li>
                <li>
                  <a href="https://github.com/djm158" class="btn-social btn-outline"><i class="fa fa-github" aria-hidden="true"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              Copyright &copy; Daniel McGrath 2017
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  $name =  $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $connection = mysqli_connect("localhost", "root", "mcgrad123$");

  $create_db = "CREATE DATABASE IF NOT EXISTS USER_DATA";

  mysqli_query($connection, $create_db);

  mysqli_select_db($connection, 'USER_DATA');

  $create_table = "CREATE TABLE Users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    message VARCHAR(1000)
)";

  mysqli_query($connection, $create_table);

  $insert_data = "INSERT INTO Users (name, email, message)
  VALUES ('$name', '$email', '$message')";

  if(mysqli_query($connection, $insert_data)) {
    //$last_id = mysqli_insert_id($connection);
    //echo "New record created at " . $last_id;
  }
  else {
    echo "Error: " . $connection->error;
  }

  //$get_all_data = "SELECT * FROM Users";

  //if($results = mysqli_query($connection, $get_all_data)) {
    //$data = mysqli_fetch_assoc($results);

    //foreach($data as &$value) {
      //echo $value;
    //}

    //$results->close();
  //}
  mysqli_close($connection);



 ?>

  </html>
