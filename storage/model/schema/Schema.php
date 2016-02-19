<?php
namespace storage\model\schema;

use core\App;
use general\enum\Connection;
use general\enum\Table;
use Illuminate\Database\Capsule\Manager as DB;

/**
 * Class Schema
 * @package model\schema
 * @author sefa@dehaa.com
 */
class Schema extends DB
{
	public function create()
	{
		$builder = $this->connection(Connection::TUTORIALS)->getSchemaBuilder();
		if (!$builder->hasTable(Table::DOCUMENT)) {
			$builder->create(
				Table::DOCUMENT,
				function ($table) {
					/**
					 * @var $table \Illuminate\Database\Schema\Blueprint
					 */
					$table->engine = 'InnoDB';
					$table->integer("documentId",true);
					$table->string("documentTitle");
					$table->string("document");
				}
			);
		}else{

		}
	}
}