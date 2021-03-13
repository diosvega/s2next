var app = angular.module('myApp', ['dndLists', 'angularUtils.directives.dirPagination', '720kb.tooltips'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});



app.factory('Gd', function() {
  return {
      url : 'http://localhost/cfitd/public_html/',
	  us : 'superadmin@mail.com',
	  ps : 'RsVKg-9hQwE-fRhN2f-RD2sF',
  };
});

      app.controller('VistaController', function($scope, $http, Gd) {
		  
		  
		  
		 	$http.get(Gd.url + '/profile')
    .success(function(response) {
		//$localStorage.gdata = response;
		$scope.Data = response;
		
		});
		     
		
		
		// $scope.Data = $localStorage.gdata;
		
		
		
		$scope.showDetail = function(index){
            var selectedItem = $scope.Data.alumnos[index];
			
            $scope.appNavigator.pushPage('plugins.html', {selectedItem, animation: 'lift'});
        }

	  });

