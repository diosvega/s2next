var app =  angular.module('myApp', ['naif.base64'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

app.controller('ctrl', function($scope, $http, $window, $rootScope){

  $scope.onChange = function (e, fileList) {
    alert('this is on-change handler!');
  };
  
  $scope.onLoad = function (e, reader, file, fileList, fileOjects, fileObj) {
    alert('this is handler for file reader onload event!');
  };

  var uploadedCount = 0;

  $scope.files = [];
})