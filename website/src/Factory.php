<?php 

namespace rkdtnrkdtn55;

use rkdtnrkdtn55\Controller\LoginController;

class Factory
{
	private $config;
	public function __construct(array $config)
	{
		$this->config = $config;
		
	}
	public function getIndexController()
	{
		return new Controller\IndexController($this->getTemplateEngine());
	}
	
	public function getLoginController()
	{
		return new LoginController($this->getTemplateEngine(), $this->getLoginService());
	}
	
	public function getTemplateEngine()
	{
		return new \rkdtnrkdtn55\SimpleTemplateEngine(__DIR__ . "/../templates/");
	}
	public function getMailer()
	{
		return \SwiftMailer::newInstance();
	}
	
	public function getPdo()
	{
		return new \PDO (
			'mysql:host=' . $this->config["database"]["host"] . ';dbname=app;charset=utf8',
			$this->config["database"]["user"],
			$this->config["database"]["password"],
			[\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]
		);
	}
	
	public function getLoginService()
	{
		return new Service\LoginmysqlService(
			$this->getPdo()
		);
	}
}
?>