app.controller('customersCtrl', function($scope, $http, Gd) {
  $http({
	dataType	: "json",
    method: "GET",	
    url: Gd.url+ '/sximoapi?module=bloques',
    headers: {'Authorization': 'Basic ' + btoa("superadmin@mail.com:"+Gd.ps+"")},
})
  .success(function (data) {$scope.names = data.rows;});
});

app.controller('customersCtrl', function($scope, $http, Gd) {
	
$scope.update = function(nivel, grado) {
        /*Cita HTTP*/
	$http.get(Gd.url+ '/bloques/'+ nivel +'/'+ grado +'')
    .success(function(response) {$scope.names = response;});
	
	
	$http.get(Gd.url+ '/bloques/'+ nivel +'/'+ grado +'')
    .success(function(response) {$scope.ciclo = response;});
/*Cita HTTP*/
      };
	  
	  
 $scope.idbloque = function(bloque) {
	 
	 
        $http.get(Gd.url + '/bloq/'+ bloque +'')
    .success(function(response) {$scope.dbloques = response;});
	
	$http.get(Gd.url + '/blq/'+ bloque +'')
    .success(function(response) {$scope.lbloques = response;});
	
	
	
	
      };
	  
	  

	  
	  
 $scope.grados = function(nivel) {
        if($scope.nivel == 1){
            $scope.output= names=[
{id:'1',grado:'Primero'},
{id:'2',grado:'Segundo'},
{id:'3',grado:'Tercero'}]
        }
		
		
		if($scope.nivel == 2){
            $scope.output= names=[
{id:'1',grado:'Primero'},
{id:'2',grado:'Segundo'},
{id:'3',grado:'Tercero'},
{id:'4',grado:'Cuarto'},
{id:'5',grado:'Quinto'},
{id:'6',grado:'Sexto'},


]
        }
		
		if($scope.nivel == 3){
            $scope.output= names=[
{id:'1',grado:'Primero'},
{id:'2',grado:'Segundo'},
{id:'3',grado:'Tercero'}]
        }
        
      };
	  
	$scope.addTask = function(){
    $scope.models.lists.A.push({label: "Item A editable"});
  };
  
  
  $scope.addsTask = function(){
    $scope.lbloques.lists.A.push({label: "Item A editable"});
  };
  
  $scope.removeItem = function(index) { 
		$scope.models.lists.A.splice(index, 1);
    };
	
	  $scope.removesItem = function(index) { 
		$scope.lbloques.lists.A.splice(index, 1);
    };

	
	$scope.bugs = {
      "filters": [
          { name: 'New', value: true },
          { name: 'Current', value: false },
          { name: 'Fixed', value: false },
          { name: 'Rejected', value: false },
        ]
    };

  $scope.test = function() {
    console.log($scope.bugs);
  };

$http.get(Gd.url+ '/sesionp/3')
.success(function(response) {$scope.planes = response;});  
  
  
  // inicia la función para hacer un post
$scope.check_credentials = function () {

document.getElementById("message").textContent = "";

$http.get(Gd.url+ '/sesionp/3')
.success(function(response) {$scope.planes = response;});

// request por medio de un post en angulajs y php 
var request = $http({
    method: "post",
    url: "http://localhost/cfitd/public_html/psesion",
    data: {
        email: $scope.email,
        pass: $scope.password
    },
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
});

/* Check whether the HTTP Request is successful or not. */
request.success(function (data) {
    document.getElementById("message").textContent = "You have login successfully with email "+data;
	$scope.lbloques.lists.A.push({label: data});
});
}


$scope.forms = [{name: "form1"}];
        
        $scope.createForm = function(){
            $scope.forms.push({name: "form" + ($scope.forms.length + 1)});
        };
        
        $scope.saveForm = function(formScope){
            alert("Save called for " + formScope.name + ", myInputValue = " + formScope.myInputValue);            
        };

//Limites para checkbox//		
		$scope.limit = 4;
		$scope.lim = 1;
		$scope.checked = 0;
		
		
	 $scope.checkChanged = function(y){
		
		
        if(y.value) $scope.checked++;
        else $scope.checked--;
    }
	
			$scope.lim = 1;
		$scope.checkado = 0;
	$scope.Cambio = function(y){
		
		
        if(y.value_un) $scope.checkado++;
        else $scope.checkado--;
		
		
    }
//filtros
$scope.filters = { };
});


