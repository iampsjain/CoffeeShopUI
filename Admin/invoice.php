  <?php include'../header.html' ?>
  
<!DOCTYPE html>
<html>
<style>
table, th , td  {
  border: 1px solid grey;
  border-collapse: collapse;
  padding: 5px;
}
table tr:nth-child(odd) {
  background-color: #f1f1f1;
}
table tr:nth-child(even) {
  background-color: #ffffff;
}



.btn-group-justified {
  display: flex;
  width: 100%;
  .btn,
  .btn-group {
    flex: 1;
    .btn {
      width: 100%;
    }
    .dropdown-menu {
      left: auto;
    }
  }
}

		.hsdivinit {
			display: inline-block;
			position: fixed;
			/*margin: 0 auto;*/
			padding: 10px 15px;
			transition: all 1s cubic-bezier(.25, .8, .25, 1);
			background: #34495e;
			left: 50%;
			bottom: -200px;
			transform: translate(-50%, -50%);
			color: #fff;
			/*opacity: 0;*/
			border-radius: 3px;
			font-family: 'Jaldi', sans-serif;

		}

		.hsdivshow {
			-webkit-animation: hsshowpulse .5s ease both;
		}

		@-webkit-keyframes hsshowpulse {
			0% {
				opacity: 1;
				bottom: -100px;
			}
			100% {
				opacity: 1;
				bottom: 20px;
			}
		}

		.hsdivhide {
			-webkit-animation: hshidepulse .3s ease both;
		}

		@-webkit-keyframes hshidepulse {
			0% {
				opacity: 1;
				bottom: 20px;
			}
			100% {
				opacity: 0;
				bottom: -100px;
			}
		}

		.hsdone {
			font-size: 15px;
			padding: 10px;
			background:#2ecc71;
			color: #FFF;
			display: inline-block;
			width: 20px;
			height: 20px;
			/* color: #444; */
			text-align: center;
			border-radius: 50%;
			box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
		}

		.hswarning {
			font-size: 15px;
			padding: 10px;
			background: #f1c40f;
			color: #fff;
			display: inline-block;
			width: 20px;
			height: 20px;
			/* color: #444; */
			text-align: center;
			border-radius: 50%;
			box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
		}

		.hserror {
			font-size: 15px;
			padding: 10px;
			background: #e74c3c;
			color: #fff;
			display: inline-block;
			width: 20px;
			height: 20px;
			/* color: #444; */
			text-align: center;
			border-radius: 50%;
			box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
		}		
		.hsheart {
			font-size: 15px;
			padding: 10px;
			background: #fff;
			color: #e74c3c;
			display: inline-block;
			width: 20px;
			height: 20px;
			/* color: #444; */
			text-align: center;
			border-radius: 50%;
			box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
		}
		.hssad {
			font-size: 15px;
			padding: 10px;
			background: #ecf0f1;
			color: #d35400;
			display: inline-block;
			width: 20px;
			height: 20px;
			/* color: #444; */
			text-align: center;
			font-weight: 600;
			border-radius: 50%;
			box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
		}
		.hstext{
			padding: 0 10px;
			font-size: 20px;
			line-height: 20px;
		}
		button{
			margin: 20px;
		}
</style>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
    <script data-require="angular-ui-bootstrap@0.3.0" data-semver="0.3.0" src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.3.0.min.js"></script>
    
   <script src="hotsnackbar.js"></script>
  <link href="hotsnackbar.css" ref="stylesheet"></link>
 
  
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/modern-business.css" rel="stylesheet">

<body ng-app="myApp" ng-controller="customersCtrl" ng-cloak>
 

<div > 

<div class="container">
<br>

<br>
<br>
<div class="row">
<table class="table table-bordered">
<thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
       
		
		<th>Bill</th>
		<th>Payment Method</th>
		<th>Action</th>
      </tr>
    </thead>
  <tr ng-repeat="x in data | startFrom:currentPage*pageSize | limitTo:pageSize">
   <td> {{$index +1 }} </td>
    <td>{{ x.productName | uppercase }}</td>
   
	 <td>{{ x.bill }}</td>
	  <td>{{ x.payment_method }}</td>
	  <td> <button type="button" class="btn btn-primary" ng-click="getproductbyid(x.id)" data-toggle="modal" data-target="#CheckModel" >See Details</button></td>
  </tr>
</table>
<ul class="pagination">
  <li class="page-item" ng-disabled="currentPage == 0" ng-click="currentPage=currentPage-1"><a class="page-link" href="#">Previous</a></li>
  <li class="page-item"><a class="page-link" href="#">{{currentPage+1}}/{{numberOfPages()}}</a></li>
 
  <li class="page-item"  ng-disabled="currentPage >= data.length/pageSize - 1" ng-click="currentPage=currentPage+1"><a class="page-link" href="#">Next</a></li>
</ul>
  
</div>
</div>
 
  
  
  
  
 
</div>


  <div class="modal" id="CheckModel">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Check Bill invoice</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		 
		 
		  <label for="ProductId" class="cols-sm-2 control-label">Customer Id</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control"  name="id" id="id" value="{{productDetailstoEdit.id}}" placeholder="Enter Product Id" disabled />
                                            </div>
                                        </div>		
		<label for="CustomerName" class="cols-sm-2 control-label">Customer Name</label>
	 
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control"  name="id" id="id" value="{{productDetailstoEdit.name}} {{productDetailstoEdit.surname}}" placeholder="Enter Product Id" disabled />
                                            </div>
                                        </div>	
										
		<label for="Address" class="cols-sm-2 control-label">Address</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control"  name="id" id="id" value="{{productDetailstoEdit.address}}" placeholder="Enter Product Id" disabled />
                                            </div>
                                        </div>	
			<label for="Mobile" class="cols-sm-2 control-label">Mobile Number</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control"  name="id" id="id" value="{{productDetailstoEdit.mobile_number}}" placeholder="Enter Product Id" disabled />
                                            </div>
                                        </div>	
			<label for="city" class="cols-sm-2 control-label">City</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control"  name="id" id="id" value="{{productDetailstoEdit.city}} , {{productDetailstoEdit.state}}" placeholder="Enter Product Id" disabled />
                                            </div>
                                        </div>	
		<br>
       <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
       
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        </div>
        
      </div>
    </div>
  </div>
  
  
  
  </div>



<script>

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

$(function() {
    $('form').submit(function() {
       $('#result').text();
		
        return false;
    });
});

$(".reset").click(function() {
    $(this).closest('form').find("input[type=text], input[type=textarea]").val("");
});


var url="http://localhost:8888/billing/"
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
    $http.get(url)
    .then(function (response) {$scope.names = response.data;
	$scope.maketodos($scope.names);
	});
	
	
	$scope.convertandcall=function(){
 		
  $http.post(url, $scope.resultdata)
  .then(function(response) {
  if(response.data){
   $scope.myWelcome = response.data;
	alert("Record Inserted");
  }
  }
  , function (response) {

$scope.msg = "Service not Exists";


$scope.statustext = response.statusText;


alert($scope.statustext);
});
  }
  
  
  $scope.deleterecord=function(){

   $http.delete(url+$scope.ProductId).then(function(response){
   alert("Record Deleted");
 });
  
  }
  $scope.getproductbyid=function(id){

   $http.get("http://localhost:8888/address/getbyid/"+id).then(function(response){
	$scope.productDetailstoEdit=response.data;
	console.log($scope.productDetailstoEdit);
 });
  
  }
   $scope.updaterecord=function(){
$scope.datatoupdate=JSON.stringify($('#editform').serializeObject())
  
   $http.put(url,$scope.datatoupdate).then(function(response){
	alert("Dataupdated");
  document.getElementById("editform").reset();

	console.log(response.data);
 });
  }
  
  
  $scope.maketodos=function(data){
   $scope.currentPage = 0;
    $scope.pageSize = 5;
    $scope.data = data;
    
    
  }
  
  $scope.numberOfPages=function(){
        return Math.ceil($scope.data.length/$scope.pageSize);                
    }
	
});
app.filter('startFrom', function() {
    return function(input, start) {
        start = +start; //parse to int
        return input.slice(start);
    }
});



</script>

</body>
</html>
