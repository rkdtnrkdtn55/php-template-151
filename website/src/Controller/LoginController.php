<?php

namespace rkdtnrkdtn55\Controller;

use rkdtnrkdtn55\SimpleTemplateEngine;
use rkdtnrkdtn55\Service\LoginService;

class LoginController 
{
  /**
   * @var ihrname\SimpleTemplateEngine Template engines to render output
   */
  private $template;
  
  /**
   * @param ihrname\SimpleTemplateEngine
   */
  private $pdo;
  
  /**
   * @param ihrname\SimpleTemplateEngine
   * 
   */
  private $loginService;
  
  /**
   * @param ihrname\SimpleTemplateEngine
   * @param 
   */
  public function __construct(SimpleTemplateEngine $template, LoginService $login)
  {
     $this->template = $template;
     $this->loginService = $login;
  }

  public function showLogin() 
  {
  	echo $this->template->render("main.html.php");
  }
  public function login(array $data)
  {
  	if(!array_key_exists("email", $data) OR !array_key_exists("password", $data)) {
  		$this ->showLogin();
  		return;
  	}
  	
  	if($this->loginService -> authenticate($data["email"], $data["password"])){
  		$_SESSION["email"] = $data["email"];
  		header("Location: /post");
  		echo "Login worked";
  	} else {
  		echo $this->template->render("main.html.php", ["email"=> $data["email"]]);
  	}
  }
 public function logout()
 {
 	unset($_SESSION["email"]);
 	echo $this->template->render("main.html.php");
 }
}
