<?php

Namespace rkdtnrkdtn55\Service;

class FilemysqlService
{
	/**
	 * @var \PDO
	 */
	private $pdo;
	
	public function __construct(\PDO $pdo)
	{
		$this->pdo = $pdo;
	}
	
	/**
	 * @param \PDO
	 */
	public function SaveFile($filename,$filetype,$filesize,$content,$message)
	{
		$stmt = $this->pdo->prepare("INSERT INTO File (FileName, Type, Size, Content, Message)
									 VALUES (:FileName, :Type, :Size, :Content, :Message)");
		$stmt->bindValue(":FileName", $filename);
		$stmt->bindValue(":Type", $filetype);
		$stmt->bindValue(":Size", $filesize);
		$stmt->bindValue(":Content", $content);
		$stmt->bindValue(":Message", $message);
		$stmt->execute();
		
		$id = $this->pdo->lastInsertId();
		
		
		move_uploaded_file(
			$_FILES["img"]["tmp_name"], 
			__DIR__ . "/../../web/upload/". $id .".jpg"
		);
		
		return $id;
	}
	
	public function loadPost($id) {
		
		$stmt = $this->pdo->prepare("SELECT * FROM File WHERE id=?");
		$stmt->execute([$id]);
		
		if($stmt->rowCount() != 1) {
			throw new \Exception("Unknown Postid");
		}
		
		return $stmt->fetchObject();
		
	}
}