<?php
namespace storage\model\document;

use core\Model;
use general\enum\Connection;
use general\enum\ProcessType;
use general\enum\Table;

/**
 * Class Document
 * @package storage\model\document
 */
class Document extends Model
{
	protected $connection = Connection::TUTORIALS;
	protected $table = Table::DOCUMENT;
	protected $primaryKey = "documentId";

	/**
	 * @param null $param
	 * @return array
	 */
	public static function getRequiredParameters($param = null)
	{
		$requiredParameters = [
			ProcessType::DOCUMENT_ADD => [
				'userId','documentTitle','documentContent','tags','categories','documentLabelId','documentLabelOrder'
			],
			ProcessType::DOCUMENT_UPDATE => [
				'userId','documentTitle','documentContent','tags','categories','documentLabelId','documentLabelOrder'
			],
		];

		if (isset($param) && array_key_exists($param, $requiredParameters)) {
			return $requiredParameters[$param];
		} else {
			return $requiredParameters;
		}

	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
	 */
	public function categories()
	{
		return $this->hasManyThrough(Category::class, DocumentCategoryRelation::class, "documentId", "categoryId");
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
	 */
	public function tags()
	{
		return $this->hasManyThrough(Tag::class, TagDocumentRelation::class, "documentId", "tagId");
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function comments()
	{
		return $this->hasMany(Comment::class, "documentId", "documentId");
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function user()
	{
		return $this->hasOne(User::class, "userId", "userId");
	}
}