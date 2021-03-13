app.controller('mainController', function($scope) {
    $scope.pageClass = 'slideInUp';
});

app.controller('planController', function($scope, $http, Gd ) {
    $scope.pageClass = 'slideInUp';
	$scope.date = new Date();
	$scope.url = Gd.url;
	 $scope.reverse = $scope.reverse;
		  
		 	$http.get(Gd.url + '/profile')
    .success(function(response) {
		//$localStorage.gdata = response;
		$scope.Data = response;
		
		});
	
	
});

app.controller('EvarController', function($scope, $http, Gd, $localStorage, $routeParams ) {
    $scope.pageClass = 'slideInUp';
	$scope.date = new Date();
	$scope.url = Gd.url;
	$scope.search = { nivel: $routeParams.nivel, grado: $routeParams.grado, bloque: $routeParams.idp};
		$scope.searchs = { nivel: $routeParams.nivel, grado: $routeParams.grado};
		$scope.its = {plan:$routeParams.idp, tipo:$routeParams.tipo, fecha: $scope.date };
		$scope.form = $routeParams.tipo;
		$scope.nivel = $routeParams.nivel;
		$scope.grado = $routeParams.grado;
		$scope.plan = $routeParams.plan;
		$scope.idp = $routeParams.idp;
		$scope.unidad = {id_unidad: $routeParams.plan}
		
		
		/*Vista Evar01 para evaluación de impacto*/
		$scope.eva01 = { nivel: $routeParams.nivel, grado: $routeParams.grado, bloque: $routeParams.idp, id_tipoeval:1};
		
		
		
		$scope.fechafilter = function (date){
	$scope.date = date;
    $scope.results = $filter('date')($scope.date, "yyyy-MM-dd");
	$scope.search = {fecha_alta:$scope.results}
    }
		  
		 	$http.get(Gd.url + '/reporteevaluaciones')
    .success(function(response) {
		//$localStorage.gdata = response;
		$scope.Datas = response;
		
		});
		
		
		$http.get(Gd.url + '/profile')
    .success(function(response) {
		//$localStorage.gdata = response;
		$scope.Data = response;
		
		});
		
		
		
	
	
});

app.controller('EvaluacionController', function($scope, $http,  Gd, $localStorage, $routeParams) {
		  $scope.dateurl = $routeParams.fecha;
		  $scope.date = new Date($scope.dateurl);
		  $scope.pageClass = 'slideInUp';
		$scope.search = { nivel: $routeParams.nivel, grado: $routeParams.grado};
		$scope.searchs = { nivel: $routeParams.nivel, grado: $routeParams.grado };
		$scope.its = {plan:$routeParams.idp, tipo:$routeParams.tipo, fecha: $scope.date };
		$scope.form = $routeParams.tipo;
		$scope.nivel = $routeParams.nivel;
		$scope.grado = $routeParams.grado;
		$scope.plan = $routeParams.plan;
		$scope.idp = $routeParams.idp;
		$scope.forma = {tipo:$routeParams.tipo }
		$scope.unidad = {id_unidad: $routeParams.idp}
		
		$scope.eval = function(data, datas, forma){
			$scope.hola = datas;
			$scope.hi = forma;
			$scope.me = data;
			
			var request = $http({
                method: "post",
                url: Gd.url + 'evaluarfut',
                data:  { data, datas, forma },
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            });
            request.success(function (data) {
				
                $scope.reporte = data;
				
				
				
            });
			
		}
		
		
		$scope.evalue = function(data, datas, forma){
			$scope.hola = datas;
			$scope.hi = forma;
			$scope.me = data;
			
			var request = $http({
                method: "post",
                url: Gd.url + 'evalua',
                data:  { data, datas, forma },
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            });
            request.success(function (data) {
				
                $scope.reporte = data;
				
				
				
            });
			
		}
		$scope.fechafilter = function (date){
	$scope.date = date;
    $scope.results = $filter('date')($scope.date, "yyyy-MM-dd");
	$scope.search = {fecha_alta:$scope.results}
    }
		
		$scope.tasistencia = [
{val:1, txt:'Faltó'},
{val:2, txt:'Retardo'},
{val:3, txt:'Jistificante'},

]

$scope.traveler = [
        {  description: 'Senior', Amount: 50},
        {  description: 'Senior', Amount: 50},
        {  description: 'Adult', Amount: 75},
        {  description: 'Child', Amount: 35},
        {  description: 'Infant', Amount: 25 }
    ];    
    
    $scope.people = [
        {  plan: $routeParams.idp},
    ];   
	
	$scope.grade = [
{ txt:'1', val: 1},
{ txt:'2', val: 2},
{ txt:'3', val: 3},
{ txt:'4', val: 4},
{ txt:'5', val: 5},


];

$scope.preguntas = [
{ txt:'Si', val: '1'},
{ txt:'No', val: '2'},
{ txt:'Algunas veces', val: '3'},


];

$scope.val = {val: 3}
$scope.reverse = !$scope.reverse;

			$scope.helloo = function (item, items, its, val){
		
		
		
		$scope.Datas = $localStorage.Data;
		$scope.Data =  $scope.Datas;
		var dpes = {eval: item, user: items};
		$scope.dpe = {eval: item, user: items};
		
		var request = $http({
                method: "post",
                url: Gd.url + 'evalua',
                data:  {item, items, its, val},
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            });
            request.success(function (data) {
				
                $scope.reporte = data;
				
				
				
            });
		
	}
		
		$http.get(Gd.url + '/unidades/'+$routeParams.nivel+'/'+$routeParams.grado+'')
    .success(function(resp) {$scope.uns = resp;});
		
		$http.get(Gd.url + '/pdn/'+$routeParams.nivel+'/'+$routeParams.grado+'')
    .success(function(resp) {$scope.pdn = resp;});
	
	$http.get(Gd.url + '/ques')
    .success(function(resp) {$scope.ques = resp;});
		
		
		 	$http.get(Gd.url + '/profile')
    .success(function(response) {
		//$localStorage.gdata = response;
		$scope.Data = response;		
		$localStorage.Data = response;

	$scope.sum = function(items, prop){
        return items.reduce( function(a, b){
            return a + b[prop];
        }, 0);
    };
	
	
	
		
		
	 $scope.casa = $scope.sum($scope.grade, 'val');   
   
	
	//función para hacer un post de manera general	     
		
	
	
	
	

	
	$scope.sumar = function (item){
		
		  $scope.$storage.promedio.push(
		  {
			  "txt":"item.txt",
			  "val" :  item.val,
		  }
		  )
		 
		$scope.sumatoria = $localStorage.promedio;
 
		
	}

    


		
		});
		     
		
		
		// $scope.Data = $localStorage.gdata;
			
	
		
		$scope.asistencia = $localStorage.asistencia;


   $scope.iasistencia = function (da) {
	   
	 $scope.date = new Date().getTime();
	

    if ($scope.$storage.asistencia.indexOf(da) == -1) {
    //if the object is not in the array
	
	$scope.hola = da;
	
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
$scope.$storage = $localStorage.$default({
        "asistencia": []
    });
	
$scope.$storage = $localStorage.$default({
        "promedio": []
    });

	
$scope.data = $localStorage.notas;

    $scope.delItem = function (item) {
        $localStorage.notas.splice($localStorage.notas.indexOf(item), 1);
    }
    var max = +10;
    var min = 0;

    $scope.increment = function (item) {
        if (item.quan >= max) { return; }
        item.quan++;
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
app.controller('ListaController', function($scope, $http,  Gd, $localStorage, toaster, $window, $filter) {
	
	$scope.fechafilter = function (date){
	$scope.date = date;
    $scope.results = $filter('date')($scope.date, "yyyy-MM-dd");
	$scope.search = {fecha_alta:$scope.results}
    }
    $scope.clear = function(){
        toaster.clear();
    };
	
	$scope.da = { t_asistencia : 1};
		
		
$scope.tasistencia = [
{val:1, txt:'Faltó'},
{val:2, txt:'Retardo'},
{val:3, txt:'Justificante'},
]
	
		  $scope.date = new Date();
		  $scope.pageClass = 'slideInUp';
		  
		 	$http.get(Gd.url + 'asist')
			.success(function(response) {
		//$localStorage.gdata = response;
		$scope.Data = response;		
		});
	//función para hacer un post de manera general	     
		$scope.helli = function(item){
			$scope.don = item.alm_name_s;
			
			
			
			var request = $http({
                method: "post",
                url: Gd.url + '/asistencia',
                data: item,
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            });
            request.success(function (data) {
				
                $scope.reporte = data;
				$http.get(Gd.url + 'asist')
			.success(function(response) {
		//$localStorage.gdata = response;
		$scope.Data = response;		
		});
				
				
            });
        }
		
		$scope.dela = function(item){			
			
			
			var request = $http({
                method: "post",
                url: Gd.url + '/delasist',
                data: item,
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            });
            request.success(function (data) {
				
                $scope.reporte = data;
				$http.get(Gd.url + 'asist')
			.success(function(response) {
		//$localStorage.gdata = response;
		$scope.Data = response;		
		});
				
            });
        }
		
		//función para hacer un post de manera general		
			
			
		
		
		// $scope.Data = $localStorage.gdata;
			
	
		
		$scope.asistencia = $localStorage.asistencia;


   $scope.iasistencia = function (da) {
	   
	 $scope.date = new Date().getTime();
	

    if ($scope.$storage.asistencia.indexOf(da) == -1) {
    //if the object is not in the array
	
	$scope.hola = da;
	
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
$scope.$storage = $localStorage.$default({
        "asistencia": []
    });
	

	
$scope.data = $localStorage.notas;

    $scope.delItem = function (item) {
        $localStorage.notas.splice($localStorage.notas.indexOf(item), 1);
    }
    var max = +10;
    var min = 0;

    $scope.increment = function (item) {
        if (item.quan >= max) { return; }
        item.quan++;
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

app.controller('aboutController', function($scope) {
    $scope.pageClass = 'slideInUp';
});

app.controller('contactController', function($scope) {
    $scope.pageClass = 'slideInUp';
});

app.controller('myCtrl', function($scope, $http, $timeout, Gd,  $route, $routeParams, myData, $rootScope) {
	$scope.pageClass = 'slideInUp';
	$rootScope.$on('$routeChangeStart', function(event, currRoute, prevRoute){
		$rootScope.animation = currRoute.animation;
	  });

	$scope.data = myData.shareData;
	
	$scope.name = "BookController";
     
	 $scope.num = $routeParams.bookId;
	 $scope.note = { id_noticias:  $scope.num};
	 
	 $scope.mn = function(x){
		 
		 $scope.noticia = x;
		 
	 }
	 
	 $scope.ocultar = function(x){
		 
		 $scope.noticia = '';
		 
	 }

	
    $scope.dataLoaded = true;
	$scope.hola = "John";
	 
	$http.get(Gd.url + '/ntc')
    .success(function(response) {$scope.ntc = response;});
	
	$scope.mostrar = function (id){
		
		$scope.hola = id;
		
	};

});

app.controller('CalendarDemoCtrl', ['$scope', function ($scope) {
    'use strict';
	
	var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();

	/* event source that contains custom events on the scope */
	
    $scope.changeMode = function (mode) {
        $scope.mode = mode;
    };

    $scope.today = function () {
        $scope.currentDate = new Date();
    };

    $scope.isToday = function () {
        var today = new Date(),
            currentCalendarDate = new Date($scope.currentDate);

        today.setHours(0, 0, 0, 0);
        currentCalendarDate.setHours(0, 0, 0, 0);
        return today.getTime() === currentCalendarDate.getTime();
    };

    $scope.loadEvents = function () {
        $scope.eventSource = [
		{ title: 'Este formato dura unas horas' , startTime: new Date(y, m, d, 11, 0), endTime: new Date(y, m, d, 12, 0), allDay: false},
		{ title: 'Este formato dura unas horas' , startTime: new Date(y, m, d, 12, 0), endTime: new Date(y, m, d, 13, 0), allDay: false},
		{ title: 'Este formato dura unas horas' , startTime: new Date(y, m, d, 14, 0), endTime: new Date(y, m, d, 15, 0), allDay: false},
		
		];
    };

    $scope.onEventSelected = function (event) {
        $scope.event = event;
    };

    function createRandomEvents() {
        var events = [];
        for (var i = 0; i < 20; i += 1) {
            var date = new Date();
            var eventType = Math.floor(Math.random() * 2);
            var startDay = Math.floor(Math.random() * 90) - 45;
            var endDay = Math.floor(Math.random() * 2) + startDay;
            var startTime;
            var endTime;
            if (eventType === 0) {
                startTime = new Date(Date.UTC(date.getUTCFullYear(), date.getUTCMonth(), date.getUTCDate() + startDay));
                if (endDay === startDay) {
                    endDay += 1;
                }
                endTime = new Date(Date.UTC(date.getUTCFullYear(), date.getUTCMonth(), date.getUTCDate() + endDay));
                events.push({
                    title: 'All Day - ' + i,
                    startTime: startTime,
                    endTime: endTime,
                    allDay: true
                });
            } else {
                var startMinute = Math.floor(Math.random() * 24 * 60);
                var endMinute = Math.floor(Math.random() * 180) + startMinute;
                startTime = new Date(date.getFullYear(), date.getMonth(), date.getDate() + startDay, 0, date.getMinutes() + startMinute);
                endTime = new Date(date.getFullYear(), date.getMonth(), date.getDate() + endDay, 0, date.getMinutes() + endMinute);
                events.push({
                    title: 'Event - ' + i,
                    startTime: startTime,
                    endTime: endTime,
                    allDay: false
                });
            }
        }
        return events;
    }
}]);

