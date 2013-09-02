<?php
require_once __DIR__ . '/../classes/MPClient.php';

class MPApi
{
	private static $instance;
	const APP_NAME = 'mp_rest';
	
	private function __construct() { }
	
	public static function instance()
	{
		if(!self::$instance) {
			self::$instance = new self;
		}
		return self::$instance;
	}
	
	/**
	 * Pega o id do usuário ou false
	 */
	public function getCid($uid = NULL, $csrf = NULL)
	{
		if(is_null($uid) && is_null($csrf)) {
			if(!isset($_REQUEST['cid'],$_REQUEST['csrf'])) {
				return false;
			}
			
			$uid  = $_REQUEST['cid'];
			$csrf = $_REQUEST['csrf'];
		}
		
		if(MPClient::checkToken(self::APP_NAME, $uid, $csrf, 'cliente')) {
			return $_REQUEST['cid'];
		}
		
		return false;
	}
	
	/**
	 * Impede o acesso se não estiver logado
	 */
	public function onlyClient()
	{
		if(!$this->getCid()) {
			die(json_encode(
				MPClient::retorno(false, 'Você precisa estar enviar os dados de autenticação para acessar o conteúdo desta página')
			));
		}
	}
}
