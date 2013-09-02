// Definir o caminho para a pasta onde estão os módulos do Angular
// usados pelo aplicativo
// Coloque uma barra (/) no final, exemplo: "angular/"
var angulardir = 'angular/';

// Load jQuery
$script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', 'jquery');

// When jQuery loaded
$script.ready('jquery', function() {
	// Load AngularJS
	$script('https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js','angularjs');
});

// When AngularJS loaded
$script.ready('angularjs', function() {
	/*================================================
	 * A partir daqui, todos os caminhos
	 * estão sob o diretório JS
	 *==============================================*/
	$script.path(angulardir);
	
	/*================================================
	 * Aqui carrega o aplicativo inteiro e depois inicia
	 * o angular.
	 *===============================================*/
	$script([
		'pageloading/pageLoading',
		'mppainel/aplicativos/aplicativos',
		'mppainel/compras/compras'
	], function() {
		$script('mppainel/mppainel', function() {
			angular.element(document).ready(function() {
				angular.bootstrap(document, ['mpPainel']);
			});
		});
	});
});
