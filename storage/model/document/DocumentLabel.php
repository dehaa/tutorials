<?php
namespace storage\model\document;

use core\Model;
use general\enum\Connection;
use general\enum\Table;

/**
 * Class DocumentLabel
 * @package storage\model\document
 * @author sefa@dehaa.com
 */
class DocumentLabel extends Model
{
	protected $connection = Connection::TUTORIALS;
	protected $table = Table::DOCUMENT_LABEL;
	protected $primaryKey = "documentLabelId";
}