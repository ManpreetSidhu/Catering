<?php

/*
 *     @package    Factotum EDU
 *     @version    apple
 *     @author     Abhay Arora
 *     @copyright  Copyrights (c) 2014, Abhay Arora.
 */

use google\appengine\api\app_identity\AppIdentityService;

class JsonResponse{

	private $response;
	private $statusCode;

	public function __construct($status = 200){
		$this->reset();
		$this->statusCode = $status;
	}

	public function status($status){
		$code = array(
				'OK'			=>	200,
				'ACCEPTED'		=>	202,
				'NO-CONTENT'	=>	204,
				'REDIRECT'		=>	307,
				'BAD-REQUEST'	=>	400,
				'UNAUTHORIZED'	=>	401,
				'FORBIDDEN'		=>	403,
				'NOT-FOUND'		=>	404,
				'SERVER-ERROR'	=>	500,
				'UNAVAILABLE'	=>	503
		);
		$this->statusCode = ( array_key_exists(strtoupper($status), $code) ) ? $code[strtoupper($status)] : 200;
	}

	public function add($name = NULL, $value = NULL){
		if($name == NULL)
			return FALSE;
		else{
			$this->response[$name] = $value;
			return TRUE;
		}
	}

	public function reset(){
		$this->response = array();
		$this->statusCode = 200;
		return TRUE;
	}

	public function flush($status = NULL){
		header('Content-Type: application/json');
		if($status != NULL)
			$this->status($status);
		$json['status'] = $this->statusCode;
		$json['data'] = $this->response;
		echo json_encode($json);
		exit;
	}

}

//	EOF