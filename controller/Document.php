<?php

namespace controller;
use service\DocumentService;
use storage\model\schema\Schema;

/**
 * @author sefa@dehaa.com
 */
class Document
{
	public function get(){
		var_dump($key = md5(microtime().rand()));
		foreach (DocumentService::getInstance()->getAll() as $item) {
			echo $item->documentTitle."<br />";
		}
		echo DocumentService::getInstance()->user();
	}
}