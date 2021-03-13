var app = angular.module('calendarDemoApp', ['ui.bootstrap', 'ui.rCalendar', 'ngLocale', 'slick', 'ngRoute', 'ngAnimate',  'angularUtils.directives.dirPagination', 'ngStorage', 'toaster', 'ui.select2'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});


app.config(function(paginationTemplateProvider) {
    paginationTemplateProvider.setPath('http://gratisdf.com/dirPagination.tpl.html');
});


app.factory('Gd', function() {
  return {
      url : 'http://gratisdf.com/',
	  us : 'superadmin@mail.com',
	  ps : 'RsVKg-9hQwE-fRhN2f-RD2sF',
  };
});


app.factory('myData', function() {    
  return {
    shareData : {
      foo : 'foo',
      bar : 'bar'
    }
  }
})

