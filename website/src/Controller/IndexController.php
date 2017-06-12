<?php

namespace rkdtnrkdtn55\Controller;

use rkdtnrkdtn55\SimpleTemplateEngine;

class IndexController 
{
  /**
   * @var ihrname\SimpleTemplateEngine Template engines to render output
   */
  private $template;
  
  /**
   * @param ihrname\SimpleTemplateEngine
   */
  public function __construct(SimpleTemplateEngine $template)
  {
     $this->template = $template;
  }

  public function homepage() {
  	echo $this->template->render("main.html.php");
  }

  public function greet($name) {
  	//echo $this->template->render("hello.html.php", ["name" => $name]);
  }
  public function showPostManage(){
  	echo $this->template->render("Postmanage.html.php");
  }
  public function showPost(){
  	echo $this->template->render("Post.html.php");
  }
  public function showlogouttap(){
  	echo $this->template->render("Logouttap.html.php");
  }
}