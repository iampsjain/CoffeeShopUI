<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

 
  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/modern-business.css" rel="stylesheet">

</head>

<body  ng-app="myApp" ng-controller="myCtrl">

  <!-- Navigation -->
  <?php include 'header.html';?>


  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <br>
	<br>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Products Details</li>
    </ol>

    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item"  ng-repeat="n in  data | startFrom:currentPage*pageSize | limitTo:pageSize">
        <div class="card h-100" id="{{n.id}}" onclick="moveforward(this.id)">
          <a href="#"><img class="card-img-top" src="{{n.imgurl}}" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">{{n.title}}</a>
            </h4>
            <p class="card-text">{{n.shortDesc}}</p>
          </div>
        </div>	
      </div>
    </div>

    <!-- Pagination -->
   <ul class="pagination">
  <li class="page-item" ng-disabled="currentPage == 0" ng-click="currentPage=currentPage-1"><a class="page-link" href="#">Previous</a></li>
  <li class="page-item"><a class="page-link" href="#">{{currentPage+1}}/{{numberOfPages()}}</a></li>
 
  <li class="page-item"  ng-disabled="currentPage >= data.length/pageSize - 1" ng-click="currentPage=currentPage+1"><a class="page-link" href="#">Next</a></li>
</ul>
  
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
var url="http://localhost:8888/product";

var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
  $http.get(url)
  .then(function(response) {
      $scope.myWelcome = response.data;
		$scope.maketodos($scope.myWelcome);
		console.log($scope.myWelcome);
  });
  $scope.maketodos=function(data){
   $scope.currentPage = 0;
    $scope.pageSize = 10;
    $scope.data = data;
    
    
  }
  
  $scope.numberOfPages=function(){
        return Math.ceil($scope.data.length/$scope.pageSize);                
    }
	
});

function moveforward(id){
	
	window.location.href = 'SingleItem.php?id='+id;
}


app.filter('startFrom', function() {
    return function(input, start) {
        start = +start; //parse to int
        return input.slice(start);
    }
});

</script>
</body>

</html>
