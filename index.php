<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="utf-8">
        <title>FootBoard.com</title>
        <link href="css/bootstrap.css" rel="stylesheet">
   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </head>
    <body> 
        
    <?php
			session_start();
			session_destroy();
			include "dbConnect.php";
	?>
    
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        
    <a href ="index.php" class="navbar-brand">FootBoard.com</a>
                </div>
                
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="register.php">Register</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LogIn <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                
                                <form action="logIn.php" method="post" accept-charset="UTF-8">
                                    <input type="text" class="form-control" name="username" placeholder="Username" id="user" required>
                                    <input type="password" class="form-control" placeholder="password" name="password" required>
									      <div class="col-xs-8 col-lg-offset-3">
                                    <input type="submit" value="LogIn"> 
									    </div>
                                </form>
                                
                        
                        </ul>
                    </li>
                    
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    
        
<div class="car">

<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>   
    <!-- Carousel items -->
    <div class="carousel-inner">
        <div class="item active">
        <div class="col-xs-8 col-lg-offset-2">
            <img src="reg.png" class= "img-responsive" alt="First Slide">
            <div class="carousel-caption text-right">
                <h3>Register for latest tweets!</h3>
                <p>Register at our sites for everything footy!</p>
            </div>
               </div>
        </div>
        <div class="item">
            <div class="col-xs-8 col-lg-offset-2">
            <img src="reg.png" class= "img-responsive" alt="Second Slide">
            <div class="carousel-caption text-right">
                <h3>Login</h3>
                <p >After registering, you dont need to wait longin to log in</p>
            </div>
            </div>
        </div>
        <div class="item">
         <div class="col-xs-8 col-lg-offset-2">
            <img src="loggedin.png" class="third img-responsive"  alt="Third Slide">
            <div class="carousel-caption text-right">
                <h3>Your own personalised page with 3 accounts preloaded</h3>
                <p>Your favourite tweets through our carousel! The others are down there ofcourse...</p>
            </div>
            </div>
        </div>
        <div class="item">
         <div class="col-xs-8 col-lg-offset-2">
            <img src="manage.png" class="third img-responsive"  alt="Third Slide">
            <div class="carousel-caption text-right">
                <h3>Your account,your choice!</h3>
                <p>You can get tweets from any twitter account that YOU want</p>
            </div>
            </div>
        </div>
        <div class="item">
         <div class="col-xs-8 col-lg-offset-2">
            <img src="manage.png" class="third img-responsive"  alt="Third Slide">
            <div class="carousel-caption text-right">
                <h3>A list of your chosen accounts</h3>
                <p>Just...basic stuff</p>
            </div>
            </div>
        </div>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
</div>
</div>
</body>

</html>