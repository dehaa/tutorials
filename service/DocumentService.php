<?php
namespace service;

use core\Service;
use storage\model\document\Document;
use storage\model\document\DocumentCategoryRelation;

/**
 * Class Document
 * @package service
 * @author sefa@dehaa.com
 */
class DocumentService extends Service
{
	public function addDocument()
	{
		$document = new Document();
		$document->documentTitle = "sefa";
		$document->documentLabelId=1;
		$document->userId = 1;
		$document->save();
		$documentCategoryRelation = new DocumentCategoryRelation();
		$documentCategoryRelation->documentId = $document->documentId;
		$documentCategoryRelation->categoryId = 1;
		$documentCategoryRelation->save();
	}

	/**
	 *
	 */
	public function getAll()
	{
		return Document::all();
	}

	public function removeDocument($documentId)
	{
		Document::where("documentId", $documentId)->delete();
	}

	public function user()
	{
		return Document::find(1)->first()->user()->get();
	}

	public function categories()
	{
		return Document::find(3)->categories()->get();
	}

}