<!DOCTYPE html>
<html lang="en">
<?php
// Start the session
session_start();

?>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Online Coffee Shop</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
<style>

img {
    vertical-align: middle;
    border-style: none;
}
.col-md-4 {
    margin-bottom: 1.5rem;
    text-align: center;
}
.nav-tabs {
    border-bottom: 1px solid #ddd;
}
.nav {
    margin-bottom: 0;
    padding-left: 0;
    list-style: none;
}

</style>
</head>

<body>

  <!-- Navigation -->
  <?php include 'header.html';?>


  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item " style="background-image: url(https://colorlib.com/preview/theme/coffee/img/header-bg.jpg);">
          <div class="carousel-caption d-none d-md-block">
         
            <p>This is a description for the first slide.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url(http://demo.enginetemplates.com/joomla/premium/et-coffee/images/demo/slideshow/slide1232.jpg);">
          <div class="carousel-caption d-none d-md-block">
           <p><img src="https://www.cafecoffeeday.com/sites/default/files/history-text_0_0.png" width="500px"></img></p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('http://demo.enginetemplates.com/joomla/premium/et-coffee/images/demo/slideshow/slide65765.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>We go where the best beans are: up.</h3>
            <p>The best beans grow at higher altitudes. The cold nights and warm days create denser beans. And denser beans have deeper, more complex flavours. Taste them in every cup of Starbucks coffee.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <h3 class="my-4 text-center">Welcome to Modern Business</h3>

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-md-4">
           <img class="" src="image/tea-cup.png" alt="Generic placeholder image" >
		  
            <h5>Refreshing Chai
	</h5>
          </div><!-- /.col-lg-4 -->
       <div class="col-md-4">
           <img  src="image/coffee-beans.png" alt="Generic placeholder image" width="140" height="140">
            <h5>Rich Quality Beans</h5>
          </div><!-- /.col-lg-4 -->
      
	   <div class="col-md-4">
           <img src="image/coffee-cup.png" alt="Generic placeholder image" width="140" height="140">
            <h5>Chilax Coffee</h5>
          </div><!-- /.col-lg-4 -->
      
  
    </div>
    <!-- /.row -->
<br>

    <!-- Portfolio Section -->
    <h2 style="text-align:center">Our Top Rated Dishes</h2>
</br>
    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="Service.php"><img class="card-img-top" src="https://colorlib.com/preview/theme/restaurant/img/d1.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="Service.php">BREAD FRUIT CHEESE SANDWICH</a>
            </h4>
            <p class="card-text">We made veggies taste good. You can thank us later.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="Service.php"><img class="card-img-top" src="https://colorlib.com/preview/theme/restaurant/img/d2.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">BEEF CUTLET WITH SPRING ONION</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="Service.php"><img class="card-img-top" src="https://colorlib.com/preview/theme/restaurant/img/d3.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">BEEF CUTLET WITH SPRING ONION</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="Service.php"><img class="card-img-top" src="data:image/jpeg;base64,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" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="Service.php">Cooking Perfect Breakfast in minutes</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="Service.php"><img class="card-img-top" src="http://getbusinessresults.co.uk/wp-content/uploads/2013/08/Coffee.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Make Perfect Coffee</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="Service.php"><img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoAJ0MRywoRxIuEFp9ZzCFgfufBH-jWHmCVkX930kk2DEaUOr0PA" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Cappuccino</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6">
        <h2>Why our customers like us.. :) </h2>
        <p>Café Coffee Day, a part of Coffee Day Global Limited, is India’s favourite hangout for coffee and conversations. Popularly known as CCD, we strive to provide the best experience to our guests. Our coffees are sourced from thousands of small coffee planters, who made us who we are today and we're glad to be a part of their lives. We opened our first cafe in 1996 at Brigade Road in Bangalore – the youth and the young at heart immediately took to the cafe, and it continues to be one of the most happening places in the city. CCD to the youth is a “hangout” spot where they meet people, make conversations, and have a whole lot of fun over steaming cups of great coffee.It's been an exciting journey since then to becoming the largest organised retail cafe chain in the country. We’re also present in Austria, Czech Republic and Malaysia, so if your travel takes you there, do stop by our outlets to get a taste from back home!</p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="https://colorlib.com/preview/theme/diner/img/img_2.jpg" width="700px" height="450px" alt="">
      </div>
    </div>
    <!-- /.row -->

    <hr>

  
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
