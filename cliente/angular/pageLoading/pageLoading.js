/**
 * PageLoading for AngularJS
 * 
 * Cria uma div que fica sobreposta na tela e não deixa o usuário clicar em nada
 * até que não esteja mais carregando.
 *
 * - Modo de usar:
 *
 *   controller: function($scope, pageLoading) {
 *     pageLoading.add(); // Carregando...
 *     setTimeout('pageLoading.rem()',2000); // Retirar carregando depois de 2 segundos
 *   }
 */
angular.module('pageLoading', [])

/**
 * Factory usado para deixar a página carregando
 */
.factory('pageLoading', function() {
	/**
	 * Se este número for maior que zero, deixa carregando
	 */
	var loadCount = 0;
	
	/**
	 * Callback para ser executado sempre que for feita uma
	 * alteração no loadCount
	 */
	var loadCallback;
	
	/**
	 * Construtor
	 */
	var init = function() {
		//angular.element('body').prepend(elhtml);
	};
	
	// Executar constructor
	init();
	
	return {
		/**
		 * Seta o loadCount para um número especificado
		 */
		set: function(val) {
			loadCount = val;
			this.emitChange();
		},
		/**
		 * Incrementa (+1) o loadCount
		 */
		add: function() {
			loadCount++;
			this.emitChange();
		},
		/**
		 * Decrementa (-1) o loadCount
		 */
		rem: function() {
			loadCount--;
			this.emitChange();
		},
		/**
		 * Seta o loadCount para 0
		 */
		remAll: function() {
			//loadCount = 0;
			//this.emitChange();
			this.set(0);
		},
		
		/**
		 * Define um callback para ser executado sempre
		 * que houver uma alteração no loadCount
		 */
		onChange: function(callback) {
			if(typeof callback === 'function') {
				loadCallback = callback;
				// Emite pela primeira vez para que o callback seja
				// chamado de primeira e tenha funcionamento correto
				loadCallback(loadCount);
			}
		},
		
		/**
		 * Executa o callback
		 */
		emitChange: function() {
			if(typeof loadCallback === 'function') {
				loadCallback(loadCount);
			}
		}
	};
})

.directive('pageLoading', function($compile) {
	return {
		restrict: 'EA',
		replace:false,
		scope: {startCount:'='},
		controller: function($scope, pageLoading) {
			// Define se a div vai ser visível ou não
			$scope.visible = false;
			
			// Quando o status de carregamento mudar, atualiza a visibilidade
			pageLoading.onChange(function(loadCount) {
				$scope.visible = loadCount > 0;
			});
			
			// Se está iniciando com algum valor de carregamento
			if($scope.startCount) {
				pageLoading.set(parseInt($scope.startCount));
			}
		},
		link: function(scope, element, attrs) {
			// Html do campo
			var elid = '_pageLoading_am';
			var elstyle = 'background:#000;opacity:.2;position:fixed;left:0;top:0;z-index:99999 !important;';
				elstyle += 'width:100%;height:100%;cursor:wait !important;';
			var elhtml = '<div id="'+elid+'" style="'+elstyle+'" ng-show="visible">{{visible}}</div>';
			
			// Inserir campo na página
			element.prepend($compile(elhtml)(scope));
		}
	};
});
