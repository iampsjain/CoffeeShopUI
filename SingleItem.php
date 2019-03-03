<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

 
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
 <?php include'header.html';?>
 <style>

/*****************globals*************/
body {
  font-family: 'open sans';
  overflow-x: hidden; }

img {
  max-width: 100%; }

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
  margin-top: 50px;
  background: #eee;
  padding: 3em;
  line-height: 1.5em; }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

/*# sourceMappingURL=style.css.map */

/*# sourceMappingURL=style.css.map */
.label {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}

.label-danger {
    background-color: #d9534f;
}
.label {
    display: inline;
    padding: .2em .6em .3em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em;
}
@import url(https://fonts.googleapis.com/css?family=Roboto:500);
h1,p{
    font-family: 'Roboto', sans-serif;
    text-align:center;
}
button{
    font-family: 'Roboto', sans-serif;
    text-transform: uppercase;
}

button:focus {
  outline: none !important;
}
.btn {
  border-radius: 2px;
  border: 0;
  transition: .2s ease-out;
  color: #fff;
  margin: 6px;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}

.btn:hover {
  color: #fff;
  box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
}

.btn:active, .btn:focus, .btn.active {
  outline: 0;
  color: #fff;
}

/*Primary*/
.btn-primary {
  background: #4285F4;
}

.btn-primary:hover, .btn-primary:focus {
  background-color: #5a95f5 !important;
}

.btn-primary.active {
  background-color: #0b51c5 !important;
}
/*Secondary*/
.btn-secondary {
  background-color: #aa66cc;
}
.btn-secondary:hover, .btn-secondary:focus {
  background-color: #b579d2 !important;
  color: #fff;
}
.btn-secondary.active {
  background-color: #773399 !important;
}
.btn-secondary.active:hover {
  color: #fff;
}
.btn-secondary.active:focus {
  color: #fff;
}

/*Default*/
.btn-default {
  background: #2BBBAD;
}
.btn-default:hover, .btn-default:focus {
  background-color: #30cfc0 !important;
}
.btn-default.active {
  background-color: #186860 !important;
}

/*Success*/
.btn-success {
  background: #00C851;
}
.btn-success:hover, .btn-success:focus {
  background-color: #00d255 !important;
}
.btn-success.active {
  background-color: #006228 !important;
}

/*Info*/
.btn-info {
  background: #33b5e5;
}
.btn-info:hover, .btn-info:focus {
  background-color: #4abde8 !important;
}
.btn-info.active {
  background-color: #14799e !important;
}

/*Warning*/
.btn-warning {
  background: #FF8800;
}
.btn-warning:hover, .btn-warning:focus {
  background-color: #ff961f !important;
}
.btn-warning.active {
  background-color: #cc8800 !important;
}

/*Danger*/
.btn-danger {
  background: #CC0000;
}
.btn-danger:hover, .btn-danger:focus {
  background-color: #db0000 !important;
}
.btn-danger.active {
  background-color: maroon !important;
}

/*Link*/
.btn-link {
  background-color: transparent;
  color: #000;
}
.btn-link:hover, .btn-link:focus {
  background-color: transparent;
  color: #000;
}
</style>
</head>

<body  ng-app="myApp" ng-controller="myCtrl" ng-cloak>

  <!-- Navigation -->


  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">
      <small></small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active"><a href="Service.php">Portfolio Item</a></li>
<li class="breadcrumb-item active">{{myWelcome.title}}</li>   
   </ol>

    <!-- Portfolio Item Row -->
    <div class="row">

      <div class="col-md-6">
        <img class="img-fluid" src="{{myWelcome.imgurl}}" alt="">
      </div>

      <div class="col-md-4">
	<h3 class="product-title">{{myWelcome.title}}</h3>
      
		<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
        <p><b>{{myWelcome.description}}</b></p>
			
		 <p><span class="label label-danger" style="font-size:18px">{{myWelcome.price}}&#8377;</span></p>
        <h3 class="my-3">Details</h3>
	
        <ul>
          <li>{{myWelcome.shortDesc}}</li>
        </ul>
		
				<div class="action">
							<button class="btn btn-info" type="button"><a style="color:white;text-decoration:none;" href="checkout.php?id={{myWelcome.id}}">Order Online</a></button>
								<button class="btn btn-info" type="button">Reserve Table</button>
							
						</div>
      </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <h3 class="my-4">Related Projects</h3>

    <div class="row">

      <div class="col-md-3 col-sm-6 mb-4" ng-repeat="prodimage in productimage">
        <a href="SingleItem.php?id={{prodimage.id}}">
          <img class="img-fluid" src="{{prodimage.imgurl}}" alt="">
		  <small>{{prodimage.title}}</small>
        </a>
      </div>

     

    </div>
    <!-- /.row -->

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

  <script>
  
  var url="http://localhost:8888/product/";
  var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
  $http.get(url+getParameterByName("id"))
  .then(function(response) {
      $scope.myWelcome = response.data;
		console.log($scope.myWelcome);
  });
  $http.get(url)
  .then(function(response) {
      $scope.productimage = response.data;
		console.log($scope.productimage);
  });
  
  

});

  
  function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}
  </script>
  
</body>

</html>
