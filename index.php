<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Angel L. Reyes</title>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="jQuery/main.js"></script>
  <script src="php/main.php"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> -->

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/main.css">

</head>

<body>
<div class="container-fluid">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hero clearfix">
  <div class="rotateLetters col-sm-6 col-md-6 col-lg-6">
      <div class="rhomboid">
        <p class="name">ÁNGEL REYES</p>
      </div>
      <div class="rhomboidTwo">
        <p class="jobType">WEB DEVELOPER</p>
      </div>
      <div class="rhomboidThree">
        <p class="porfolio">PORTFOLIO</p>
      </div>
  </div>

  <div class="reyes col-sm-6 col-md-6 col-lg-6">
    <img src="img/alr-photo.JPG" alt="Angel L. Reyes">
  </div>

<div class="contact col-sm-12 col-md-12 col-lg-12">
      <ul>
        <li class="me ">Me<a href="#" target="_self"></a></li>
        <li class="email"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="#" target="_self"></a></li>
      </ul> 
</div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 chevron">
      <div class="rhomboid1"></div>
      <div class="rhomboid2"></div>
    </div>
  </div> 
  
</div>

<div class="row">
  <div class="col-xs-12 about">
    <div class="col-xs-12 aboutContainer">
      <h2>About Me</h2>
      <p>I am Angel, an Atlanta-based Web Developer. I love to create curated experiences with websites and provide solutions for web problems. I'm currently launching my career as a freelancer and I would love to hear how can I help you.</p>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xs-12 mail">

    <form class="form-horizontal mailContainer" role="form" method="post" action="index.php">
      <div class="form-group">
          <label for="name" class="col-sm-2 control-label">Name</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
              <?php echo "<p class='text-danger'>$errName</p>";?>
          </div>
      </div>
      <div class="form-group">
          <label for="email" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
              <?php echo "<p class='text-danger'>$errEmail</p>";?>
          </div>
      </div>
      <div class="form-group">
          <label for="message" class="col-sm-2 control-label">Message</label>
          <div class="col-sm-10">
              <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
              <?php echo "<p class='text-danger'>$errMessage</p>";?>
          </div>
      </div>
      <div class="form-group">
          <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
              <?php echo "<p class='text-danger'>$errHuman</p>";?>
          </div>
      </div>
      <div class="form-group">
          <div class="col-sm-10 col-sm-offset-2">
              <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
          </div>
      </div>
      <div class="form-group">
          <div class="col-sm-10 col-sm-offset-2">
              <?php echo $result; ?>    
          </div>
      </div>
    </form>

  </div>
</div>

<div class="row">
  <div class="projects clearfix col-xs-12">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/TwitterLikeWebApp.png" alt="Twitter Like app">
        <div class="carousel-caption">
          <!-- ... -->
        </div>
      </div>
      <div class="item">
        <img src="img/PinterestLikeWebApp.png" alt="Pinterest Like app">
        <div class="carousel-caption">
          <!-- ... -->
        </div>
      </div>
          <div class="item">
        <img src="img/ToDoList.png" alt="To Do List app">
        <div class="carousel-caption">
         <!-- ...  -->
        </div>
      </div>
      <!-- ... -->
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  </div>
</div>

  <div class="row">
    <footer class="footer">
    <h2>Social Links</h2>
    <div class="social">
              <ul>
                <li class="linkedin "><a href="https://www.linkedin.com/in/alreyes1" target="_self"></a></li>
                <li class="twitter "><a href="https://twitter.com/Angel_L_Reyes" target="_self"></a></li>
              </ul>
    </div>
    <p>Copyright © 2015 Angel L. Reyes</p>
      
    </footer>
  </div> 

</div> 
<!-- This closes the container fluid -->
</body>
 
</html>