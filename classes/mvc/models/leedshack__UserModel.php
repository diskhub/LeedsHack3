<?php
/* START AUTO */
class leedshack__UserModel extends leedshack__BaseModel {
	protected static $table = 'user';

	protected $id;
	protected $phoneNumber;
	
	public static function write($db, $object) {
		$db->insertOrUpdateOne(
			static::$table,
			'id = %i', $object->getId(),
			'phonenumber = %s', $object->getPhoneNumber()
		);
	}

	protected static function loadFromSqlRow($row) {
		$object = new self;

		$object->setId($row->i_id);
		$object->setPhoneNumber($row->s_phonenumber);

		return $object;
	}

	public static function loadByPhoneNumber($db, $phonenumber){
		$row = $db->fetchOne('*',static::$table,"phonenumber = %s", $phonenumber);

		if(!$row){
			return false;
		}

		return static::loadFromSqlRow($row);
	}
}
?>