<?php

Namespace rkdtnrkdtn55\Service;


interface LoginService {
	/**
	 * 
	 * @param unknown $username
	 * @param unknown $password
	 * @param boolean
	 */
	public function authenticate($username, $password);
}