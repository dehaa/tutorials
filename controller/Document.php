<?php

namespace controller;
use core\DB;
use general\enum\Connection;
use service\DocumentService;

/**
 * @author sefa@dehaa.com
 */
class Document
{
	public function get(){
		DB::connection(Connection::TUTORIALS)->enableQueryLog();
		echo DocumentService::getInstance()->categories();
		//DocumentService::getInstance()->addDocument();
		var_dump(DB::connection(Connection::TUTORIALS)->getQueryLog());
	}
}