<?php
namespace service;

use core\Service;
use storage\model\document\Document;

/**
 * Class Document
 * @package service
 * @author sefa@dehaa.com
 */
class DocumentService extends Service
{
	/**
	 *
	 */
	public function getAll()
	{
		return Document::all();
	}

	public function removeDocument($documentId){
		Document::where("documentId",$documentId)->delete();
	}

	public function user(){
		return Document::find(1)->first()->user()->get();
	}

}