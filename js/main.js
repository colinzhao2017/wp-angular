//Init Angular app
var app = angular.module("myApp", ["ngRoute"]);

app.controller('myCtrl', function($scope){
	//Search Init Vars:
	$scope.keywordInput = '';
	$scope.categorySelect = '-1';
	$scope.sortSelect = 'DESC';
});

app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : baseUrl+'/home'
    })
    .when("/about", {
        templateUrl : baseUrl+'/about'
    })
	.when("/category/:name", {
		templateUrl: function(urlattr){
			return baseUrl + '/category/' + urlattr.name;
		}
    })
	.when("/post/:id", {
		templateUrl: function(urlattr){
			return baseUrl + '/?p=' + urlattr.id;
		}
    })
	.when("/search/:keyword?/:category/:sort", {
		templateUrl: function(urlattr){
			return baseUrl + '/?s='+urlattr.keyword+'&cat='+urlattr.category+'&sort='+urlattr.sort;
		}
    })
});

/** 
* Search Button Directive
*/
app.directive('searchBtn', function($compile,$location){
	var directive = {};
	directive.restrict = 'A';
	directive.compile = function($element, $attr) {
		var link = function($scope, $element, $attr) {
			$element.bind('click',function(){
				$location.path('/search/'+$scope.keywordInput+'/'+$scope.categorySelect+'/'+$scope.sortSelect);
				$scope.$apply();
			});
		}
		return link;
	}
	return directive;
});