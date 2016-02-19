<?php
namespace storage\model\document;
use core\Model;
use general\enum\Connection;
use general\enum\Table;

/**
 * Class Process
 * @package storage\model\document
 * @author sefa@dehaa.com
 */
class Process extends Model
{
	protected $connection = Connection::TUTORIALS;
	protected $table = Table::PROCESS;
	protected $primaryKey = "processId";
}