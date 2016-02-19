<?php
namespace storage\model\document;
use core\Model;
use general\enum\Table;

/**
 * Class CategoryLabel
 * @package storage\model\document
 * @author sefa@dehaa.com
 */
class CategoryLabel extends Model
{
	protected $connection = Connection::TUTORIALS;
	protected $table = Table::CATEGORY_LABEL;
	protected $primaryKey = "categoryLabelId";
}