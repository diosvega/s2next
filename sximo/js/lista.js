var app = ons.bootstrap('myApp', ['onsen', 'ngStorage']);

app.factory('Gd', function() {
  return {
      url : 'http://localhost/cfitd-r/public_html/',
	  us : 'superadmin@mail.com',
	  ps : 'RsVKg-9hQwE-fRhN2f-RD2sF',
  };
});



      app.controller('HomeController', function($scope, $http, $location,$localStorage, Gd) {
		  
		  $scope.date = new Date();
		  
		 	$http.get(Gd.url + '/profile')
    .success(function(response) {
		//$localStorage.gdata = response;
		$scope.Data = response;
		
		});
		     
		
		
		// $scope.Data = $localStorage.gdata;
			
		var page = $scope.appNavigator.getCurrentPage();
        $scope.ids = page.options.ids;
		$scope.param1 = page.options.param1;
		$scope.date = new Date();
		
		
		
		$scope.showDetail = function(index){
            var selectedItem = $scope.Data.alumnos[index];
			
            $scope.appNavigator.pushPage('plugins.html', {selectedItem, animation: 'lift'});
        }

	  });
	  
	  
	  
      app.controller('MenuController', function($scope) {
        ons.ready(function() {
			
          // Init code here
        });
      });
	  
	      app.controller('ParametersController', function($scope) {
        var page = $scope.appNavigator.getCurrentPage();
        $scope.param1 = page.options.param1;
    });
	
	app.controller('PluginsController', function($scope , $http, $localStorage) {
        var page = $scope.appNavigator.getCurrentPage();
        $scope.da = page.options.selectedItem;
		$scope.date = new Date();

	 // Set a default
    $scope.$storage = $localStorage.$default({
        "notas": []
    });
	
	$scope.$storage = $localStorage.$default({
        "asistencia": []
    });
	
	
	
    $http.get('todos.txt').then(function (res) {
        $scope.todos = res.data;
    });

   $scope.cloneItem = function (todo) {

    if ($scope.$storage.notas.indexOf(todo) == -1) {
    //if the object is not in the array
        $scope.$storage.notas.push({
            "price": todo.price,
            "id": todo.id,
            "quan": todo.quan
        });
    }
    //else you just do nothing
}

$scope.asistencia = $localStorage.asistencia;


   $scope.iasistencia = function (da) {
	   
	 $scope.date = new Date().getTime();
	

    if ($scope.$storage.asistencia.indexOf(da) == -1) {
    //if the object is not in the array
	
        $scope.$storage.asistencia.push({
            "id_profesor": da.id_profesor,
            "id_alumno": da.id_alm,
            "grado": da.grado,
			"alm_grupo": da.alm_grupo,
            "nivel": da.nivel,
            "t_asistencia": da.t_asistencia,
			"t_observaciones": da.observaciones,
			"date": $scope.date,
			
        });
    }
    //else you just do nothing
	
}
$scope.da.t_asistencia = 1;
$scope.tasistencia = [
{val:1, txt:'Faltó'},
{val:2, txt:'Retardo'},
{val:3, txt:'Jistificante'},

]
    $scope.data = $localStorage.notas;

    $scope.delItem = function (item) {
        $localStorage.notas.splice($localStorage.notas.indexOf(item), 1);
    }
    var max = +10;
    var min = 0;

    $scope.increment = function (item) {
        $scope.holass = item.date;
		item.date = item.date;
		
    };
    $scope.decrement = function (item) {
        if (item.quan <= min) { return; }
        item.quan--;
    };

    $scope.total = function () {
        var total = 0;
        angular.forEach($scope.data, function (item) {
            total += item.quan * item.price;
        })

        return total;
    }
		
		
    });
	
	

app.filter('unique', function () {

    return function (items, filterOn) {

        if (filterOn === false) {
            return items;
        }

        if ((filterOn || angular.isUndefined(filterOn)) && angular.isArray(items)) {
            var hashCheck = {}, newItems = [];

            var extractValueToCompare = function (item) {
                if (angular.isObject(item) && angular.isString(filterOn)) {
                    return item[filterOn];
                } else {
                    return item;
                }
            };

            angular.forEach(items, function (item) {
                var valueToCheck, isDuplicate = false;

                for (var i = 0; i < newItems.length; i++) {
                    if (angular.equals(extractValueToCompare(newItems[i]), extractValueToCompare(item))) {
                        isDuplicate = true;
                        break;
                    }
                }
                if (!isDuplicate) {
                    newItems.push(item);
                }

            });
            items = newItems;
        }
        return items;
    };
});