// JavaScript Document
angular.module('priceCalculate', [])
  .controller('MainController', ['$scope','$http','$interval', function($scope,$http,$interval,$anchorScroll,$location) {
	
	
  $http.post('../source/source.php').success(function(data){
    $scope.todos = data;
  });;
	 $scope.amount = 0;
	 
	 $scope.change = function(){
		 $scope.amount = 0;
		 angular.forEach($scope.todos, function(todo) {
			 todo.price = parseInt(todo.price);
			 
			if(todo.done){
				$scope.amount += todo.price
				}
		  });
		 
		 }
	
  }
])