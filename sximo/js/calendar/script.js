// Code goes here

var myApp = angular.module('MyApp', ['ui.calendar']);

myApp.controller('CalCtrl', function($scope){
  $scope.test = 'Walalalalalong';
  
  $scope.uiConfig = {
      calendar:{
        height: 450,
        editable: true,
        header:{
          left: 'title',
          center: 'month agendaWeek agendaDay',
          right: 'today prev,next'
        }
      }
    };
    
  $scope.eventSources = [[{title: 'Sample event', start: new Date()}]]
});