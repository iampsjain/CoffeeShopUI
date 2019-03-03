
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>CheckOut Online Coffee Shop</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <!-- Bootstrap core CSS -->
	
<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php include 'header.html' ?>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light"   ng-app="myApp" ng-controller="myCtrl" ng-cloak>
    <div class="container">
  <div class="py-2 text-center">
  
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">1</span>
      </h4>
	  <form id="paymentform">
      <ul class="list-group mb-3">
	   <li class="list-group-item d-flex justify-content-between bg-light">
        
		<img src="{{product.imgurl}}" width="300px" height="200px">
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Product name</h6>
            <small class="text-muted">{{product.title}}</small>
			<input type="hidden" name="productName" value="{{product.title}}">
			<input type="number" style="display:none" name="productId" value="{{product.id}}">
			<input type="number" style="display:none" name="customer_id" id="customer_id" value="">
          </div>
          <span class="text-muted">{{product.price}} &#8377;</span>
		  <input type="number"  style="display:none" name="bill" value="{{product.price}}">
		  <input type="hidden" name="payment_method" value="Pay On Delivery">
        </li>
       
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success">-5 &#8377;</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (INR)</span>
          <strong>{{product.price - 5}} &#8377;</strong>
        </li>
		
	  <div style="display:none" id="paymentformdiv">
        <div class="d-block my-3">
		 <h4 class="mb-3" >Payment</h4>
          <ul class="nav nav-tabs" role="tablist">
    
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Pay On Delivery</a>
    </li>
  </ul>
  
  
  <div class="tab-content">
    
    
    <div id="menu2" class="container tab-pane fade"><br>
     <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="paypal">Cash On Delivery</label>
          </div>   </div>
  </div>
        </div>
		 <button class="btn btn-primary btn-lg btn-block"  ng-click="addbill()" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false" type="button">Continue to Checkout</button>
        </div>
		
	  </form>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <form id="myform" class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="surname" name="surname" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

       
        <div class="mb-3">
          <label for="email_id">Email <span class="text-muted"></span></label>
          <input type="email" class="form-control" id="email_id" name="email_id" placeholder="you@example.com" required>
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>
 <div class="mb-3">
          <label for="mobile_number">Mobile <span class="text-muted"></span></label>
          <input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="">
          <div class="invalid-feedback">
            Please enter a valid Mobile Mobile for shipping updates.
          </div>
        </div>
        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="row">
        
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <select class="custom-select d-block w-100" name="state" id="state" required>
              <option value="">Choose...</option>
              <option>Maharashtra</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
		    <div class="col-md-5 mb-3">
            <label for="country">City</label>
            <select class="custom-select d-block w-100" name="city" id="city" required>
              <option value="">Choose...</option>
              <option>Aurangabad</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="pincode" name="pincode" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Save this information for next time</label>
        </div>
        <hr class="mb-4">

       

        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to payment</button>
      </form>
	  
	  
    </div>
  </div>
  
  
  <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="text-align:center">
        <h4 class="modal-title" > <p >Thank you for your order <img src="https://www.dmdentalgroup.com/wp-content/uploads/2017/12/payment_successful.gif" widht="50px" height="50px"></p>
 </h4>
        
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <div class="container">
<div class="card" style="width:400px">
  <div class="card-body">
    <h4 class="card-title"> 
    <p class="card-text"> <div class="alert alert-success">
    <strong> Your order number is {{OrderNo}} !</strong> 
  </div></p>
   <small><p> If you have any queries regarding your order please contact 02222334555 toll free number </p> </small>
  
    <a href="index.php" class="btn btn-primary">Order more ! </a>
  </div>
</div>


 
 
 
</div>
      </div>

      <!-- Modal footer -->
     

    </div>
  </div>
</div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2019 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="https://getbootstrap.com//docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="https://getbootstrap.com//docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script >
		// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  window.addEventListener('load', function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation')

    // Loop over them and prevent submission
    Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault()
          event.stopPropagation()
		 
        }else{
			 $("#paymentformdiv").css("display", "block");
		}
		
        form.classList.add('was-validated')
      }, false)
    })
  }, false)
}())


  
  var url="http://localhost:8888/product/";
  var customerurl="http://localhost:8888/address/";
  var apiurl="http://localhost:8888/sendmail"
  var billurl="http://localhost:8888/billing/";
  var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
	$scope.const1;
 $scope.const2;
 
  $http.get(url+getParameterByName("id"))
  .then(function(response) {
      $scope.product = response.data;
		$scope.const2=$scope.product.id;
		console.log($scope.product.id);
  });
  
  $scope.customerId;
  
 
  $scope.addbill=function(){
	  $scope.formData=JSON.stringify($('#myform').serializeObject());
console.log($scope.formData);
$http.post(customerurl,$scope.formData).then(function(response)
{
	
	$scope.customerId=response.data;
	
	 $("#customer_id").val($scope.customerId.id);
	 $scope.const1=$scope.customerId.id;
	 	 
		 $scope.billformdata=JSON.stringify($('#paymentform').serializeObject());
	 $http.post(billurl,$scope.billformdata).then(function(response)
{
	$scope.mydataforupdate=response.data;
	console.log($scope.mydataforupdate);
	var newNum = "productId";
	
	$scope.OrderNo=response.data.id;
	$scope.customerId[newNum]=$scope.const2;
	
	
	console.log(response.data);

	console.log(response.data)
		console.log("http://localhost:8888/sendemail/"+$scope.const1+"/"+$scope.const2);
		$http.get("http://localhost:8888/sendemail/"+$scope.const1+"/"+$scope.const2).then(function(response)
		{
			console.log("Message and email send successfully");
		});
		console.log(response.data);
		
		
	
	$http.put(customerurl,$scope.customerId).then(function(response){
		
		
	})
	
});
	 });
	 
	 
  }
  
	  
	 
	  
	

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



$.fn.serializeObject = function()
{
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};
		</script></body>
</html>
