<?php

namespace rkdtnrkdtn55\Controller;

use rkdtnrkdtn55\SimpleTemplateEngine;
use rkdtnrkdtn55\Service\FilemysqlService;

class FileController 
{
  /**
   * @var ihrname\SimpleTemplateEngine Template engines to render output
   */
  private $template;
  private $fileService;
  
  /**
   * @param ihrname\SimpleTemplateEngine
   */
  public function __construct(SimpleTemplateEngine $template, FilemysqlService $fileService)
  {
     $this->template = $template;
     $this->fileService = $fileService;
  }

  public function showPostManage($id){

  	$post = $this->fileService->loadPost($id);
  	echo $this->template->render("Postmanage.html.php", [
  		"post" => $post
  	]);
  }
 
  public function showPost(){
  	echo $this->template->render("Post.html.php");
  }
  
  public function saveFile($file, $data){
  	
  	$content = file_get_contents($file["img"]["tmp_name"]);
  	$filename = $file["img"]["name"];
  	$filetype = $file["img"]["type"];
  	$filesize = $file["img"]["size"];
  	$message = $data["Post"];
  	
  	$id = $this->fileService->SaveFile($filename, $filetype, $filesize, $content, $message);
  	header("Location: /postmanage/" . $id);
  }
}