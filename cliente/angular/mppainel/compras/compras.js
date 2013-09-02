angular.module('mpPainel.compras', [])

/**
 * Configurar urls
 */
.config(function($routeProvider) {
	var appdir = angulardir+'mppainel/compras/';
	
	$routeProvider.
		when('/compras', {
			templateUrl: appdir+'compras.html',
			controller: 'mppComprasCtrl'
		})
})

.controller('mppComprasCtrl', function($scope, mpApi) {
	/**
	 * Variáveis iniciais
	 */
	$scope.compras = [];
	
	/**
	 * Lista de aplicativos do banco de dados
	 */
	var getClientes = function() {
		mpApi.get('dados_compras', function(response) {
			
			$scope.compras = response;
		});
	};
	
	/**
	 * Construtor
	 */
	var init = function() {
		getClientes();
	};
	
	init();
});
