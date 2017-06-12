<?php


use rkdtnrkdtn55\Factory;

error_reporting(E_ALL);
require_once("../vendor/autoload.php");
$conf = parse_ini_file(__DIR__ . "/../config.ini", true);


$factory = new Factory($conf);


switch($_SERVER["REQUEST_URI"]) {
	case "/":
		$factory->getIndexController()->homepage();
		break;
	case "/login":
		$ctr =  $factory->getLoginController();
		if($_SERVER["REQUEST_METHOD"] == "GET"){
			$ctr->showlogin();
		}
		else {
			$ctr->login($_POST);
		}
		break;
	case "/post":
		$factory->getIndexController()->showPost();
		break;
	case "/postmanage":
		$factory->getIndexController()->showPostManage();
		break;
	case "/logouttap":
			$factory->getIndexController()->showlogouttap();
		break;
	case "/logout":
			$factory->getLoginController()->logout();
		break;
	default:
		$matches = [];
		if(preg_match("|^/hello/(.+)$|", $_SERVER["REQUEST_URI"], $matches)) {
			$factory->getIndexController()->greet($matches[1]);
			break;
		}
		echo "Not Found";
}

