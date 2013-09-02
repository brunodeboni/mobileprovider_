angular.module('mpPainel.aplicativos', [])

/**
 * Configurar urls
 */
.config(function($routeProvider) {
	var appdir = angulardir+'mppainel/aplicativos/';
	
	$routeProvider.
		when('/', {
			templateUrl: appdir+'meus_aplicativos.html',
			controller: 'mppAplicativosCtrl'
		}).when('/aplicativos', {
			templateUrl: appdir+'aplicativos.html'
		});
})

/**
 * Controller de listagem de aplicativos
 */
.controller('mppAplicativosCtrl', function($scope, mpApi) {
	/**
	 * Variáveis iniciais
	 */
	$scope.aplicativos = [];
	
	/**
	 * Lista de aplicativos do banco de dados
	 */
	var getAplicativos = function() {
		mpApi.get('aplicativos', function(response) {
			console.log('aplicativos ',response);
			$scope.aplicativos = response;
		});
	};
	
	/**
	 * Construtor
	 */
	var init = function() {
		//getAplicativos();
	};
	
	init();
});
