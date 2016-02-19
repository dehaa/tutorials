<?php

namespace storage\model\document;

use core\Model;
use general\enum\Connection;
use general\enum\Table;

/**
 * @author sefa@dehaa.com
 */
class Tracker extends Model
{
	protected $connection = Connection::TUTORIALS;
	protected $table = Table::TRACKER;
	protected $primaryKey = "trackerId";
}