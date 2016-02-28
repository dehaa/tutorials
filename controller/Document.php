<?php

namespace controller;
use core\Controller;
use core\DB;
use general\enum\Connection;
use service\DocumentService;

/**
 * @author sefa@dehaa.com
 */
class Document extends Controller
{
	public function add(){

	}
	public function get(){
		DB::connection(Connection::TUTORIALS)->enableQueryLog();
		echo DocumentService::getInstance()->categories();
		//DocumentService::getInstance()->addDocument();
		var_dump(DB::connection(Connection::TUTORIALS)->getQueryLog());
	}
	public function update(){

	}
	public function remove(){

	}
}