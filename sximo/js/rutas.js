app.filter('to_trusted', ['$sce', function($sce){
    return function(text) {
        return $sce.trustAsHtml(text);
    };
}]);

app.config(function ($routeProvider) {
    $routeProvider
      .when('/', {
    		templateUrl: 'page-home.html',
            controller: 'mainController'
    	})
		
      .when('/data', {
        templateUrl: 'list.html',
        controller: 'myCtrl',
		animation: 'second'
      })
	  
	  
	  
	  .when('/page-sep', {
        templateUrl: 'page-sep.html',
        controller: 'myCtrl',
      })
	  .when('/lista', {
        templateUrl: 'list.html',
        controller: 'ListaController',
      })
	  
	  .when('/evaluacion', {
        templateUrl: 'evaluacion.html',
        controller: 'EvaluacionController',
      })
	  
    	.when('/about', {
    		templateUrl: 'page-about.html',
            controller: 'aboutController'
    	})
		
		.when('/contacto', {
    		templateUrl: 'page-about.html',
            controller: 'aboutController'
    	})
		
		.when('/plan', {
    		templateUrl: 'plan.html',
            controller: 'planController'
    	})
		.when('/evaluar-planes', {
    		templateUrl: 'evaluar-planes.html',
            controller: 'planController'
    	})
		
		
    	.when('/contact', {
    		templateUrl: 'page-contact.html',
            controller: 'contactController'
    	})
	.when('/ins/', {
    templateUrl: 'list-detail.html',
    controller: 'ListaController',
    resolve: {
      // I will cause a 1 second delay
      delay: function($q, $timeout) {
        var delay = $q.defer();
        $timeout(delay.resolve, 1000);
        return delay.promise;
      }
    }
  })
  
  
  
  .when('/ev/:almId/:idplan/:fecha', {
    templateUrl: 'ev-detail.html',
    controller: 'EvaluacionController',
    resolve: {
      // I will cause a 1 second delay
      delay: function($q, $timeout) {
        var delay = $q.defer();
        $timeout(delay.resolve, 1000);
        return delay.promise;
      }
    }
  })
  
    .when('/evw/:idp/:nivel/:grado/:tipo/', {
    templateUrl: 'evaluacion-reporte.html',
    controller: 'EvarController',
    resolve: {
      // I will cause a 1 second delay
      delay: function($q, $timeout) {
        var delay = $q.defer();
        $timeout(delay.resolve, 1000);
        return delay.promise;
      }
    }
  })
  
  
  .when('/evwi/:nivel/:grado/:tipo/:fecha', {
    templateUrl: 'evaluacion-reporte.html',
    controller: 'EvarController',
    resolve: {
      // I will cause a 1 second delay
      delay: function($q, $timeout) {
        var delay = $q.defer();
        $timeout(delay.resolve, 1000);
        return delay.promise;
      }
    }
  })
  
  .when('/evaluacion/:idp/:nivel/:grado/:tipo/:fecha', {
    templateUrl: 'evaluacion.html',
    controller: 'EvaluacionController',
    resolve: {
      // I will cause a 1 second delay
      delay: function($q, $timeout) {
        var delay = $q.defer();
        $timeout(delay.resolve, 1000);
        return delay.promise;
      }
    }
  })
  
    .when('/eva/:nivel/:grado/:tipo/:fecha', {
    templateUrl: 'evaluacion.html',
    controller: 'EvaluacionController',
    resolve: {
      // I will cause a 1 second delay
      delay: function($q, $timeout) {
        var delay = $q.defer();
        $timeout(delay.resolve, 1000);
        return delay.promise;
      }
    }
  })
  
  
  .when('/dplan/:almId', {
    templateUrl: 'plan-detail.html',
    controller: 'planController',
    resolve: {
      // I will cause a 1 second delay
      delay: function($q, $timeout) {
        var delay = $q.defer();
        $timeout(delay.resolve, 1000);
        return delay.promise;
      }
    }
  })
  
	  .when('/Book/:bookId', {
    templateUrl: 'book.html',
    controller: 'myCtrl',
    resolve: {
      // I will cause a 1 second delay
      delay: function($q, $timeout) {
        var delay = $q.defer();
        $timeout(delay.resolve, 1000);
        return delay.promise;
      }
    }
  })
      .otherwise({
        redirectTo: '/'
      });
})