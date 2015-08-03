var app=angular
    .module('app', ['ui.router'])
    .config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {
    
    $urlRouterProvider.otherwise('/clientes');
    
    $stateProvider
        
        .state('clientes', {
            url: '/clientes',
            templateUrl: 'partial-clientes.html',
            controller: 'clienteCtrl' 
        })
	    .state('clientes.list', {
	        url: '/list',
	        templateUrl: 'partial-clientes-list.html'
	    })

	    // nested list with just some random string data
	    .state('clientes.paragraph', {
	        url: '/paragraph',
	        template: 'I could sure use a drink right now.'
	    })

     	// ABOUT PAGE AND MULTIPLE NAMED VIEWS =================================
        .state('proveedores', {
          url: '/proveedores',
	        views: {

	            // the main template will be placed here (relatively named)
	            '': { templateUrl: 'partial-proveedores.html' },

	            // the child views will be defined here (absolutely named)
	            'columnOne@proveedores': { template: 'Look I am a column!' },

	            // for column two, we'll define a separate controller 
	            'columnTwo@proveedores': { 
	                templateUrl: 'table-data.html',
	                controller: 'proveedoresCtrl'
	            }
	        }      
        });
        
}]);

