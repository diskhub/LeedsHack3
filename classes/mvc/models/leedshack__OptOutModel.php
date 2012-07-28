<?php
/* START AUTO */
class leedshack__OptOutModel extends leedshack__BaseModel {
	protected static $table = 'opt_out';

	protected $id;
	protected $userId;
	
	public static function write($db, $object) {
		$db->insertOrUpdateOne(
			static::$table,
			'id = %i', $object->getId(),
			'user_id = %i', $object->getUserId()
		);
	}

	protected static function loadFromSqlRow($row) {
		$object = new self;

		$object->setId($row->i_id);
		$object->setUserId($row->i_user_id);

		return $object;
	}
}
?>