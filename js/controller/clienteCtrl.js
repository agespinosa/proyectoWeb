angular
	.module('app')
	.controller('clienteCtrl', ['$scope', function($scope){
		$scope.dogs = ['Bernese', 'Husky', 'Goldendoodle'];
		$scope.texto= 'Esto es un texto';
	}]);