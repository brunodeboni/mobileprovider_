/**
 * -= MOBILE PROVIDER =-
 * Módulo geral do painel do cliente
 */
angular.module('mpPainel', [
	'pageLoading',
	'mpPainel.aplicativos',
	'mpPainel.compras'
])
.config(function($locationProvider) {
	$locationProvider.html5Mode(true);
})

/**
 * Factory usado para entrar em contato com a RestAPI do mobile provider
 */
.factory('mpApi', function($http, pageLoading) {
	var apiurl = '../api/index.php/';
	var apiauth = 'uid='+siteConfigs.uid+'&csrf='+siteConfigs.csrf;
	
	/**
	 * Coloca o usuário e token na requisição
	 */
	var appendAuth = function(url) {
		if(url.indexOf('?')>=0) {
			url += '&';
		} else {
			url += '?';
		}
		return url+apiauth;
	};
	
	
	return {
		// Método GET
		get: function(url, successCallback, errorCallback) {
			pageLoading.add(); // Carregando...
			
			var tc = function(valid) {
				var cb = valid ? successCallback : errorCallback;
				return function(response, httpStatus) {
					pageLoading.rem(); // Retirar carregando
					return cb(response, httpStatus);
				};
			};
			
			url = appendAuth(url);
			return $http.get(apiurl+url).success(tc(true)).error(tc(false));
		}
	};
})

/**
 * Controlar menus
 */
.controller('mpTopmenuCtrl', function($scope, $location, $window) {
	$scope.menus = [
		{label:'Inínio', href:'/', icon:'home'},
		{label:'Aplicativos', href:'/aplicativos', icon:'feather'},
		{label:'Sair', href:'/logout.php', absolute: true, icon:'logout'}
	];
	
	var currentMenuUrl = $location.path();
	
	$scope.getClass = function(menu) {
		//console.log('comparando: ',menu.href,currentMenuUrl);
		return (menu.href==currentMenuUrl)?'active':'';
	};
	
	$scope.open = function(menu) {
		if(!menu.absolute) {
			$location.path(menu.href).search('').hash('');
		} else {
			$window.location = menu.href;
		}
		currentMenuUrl = menu.href;
	};
});
