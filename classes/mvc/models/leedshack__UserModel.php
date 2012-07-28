<?php
/* START AUTO */
class leedshack__UserModel extends leedshack__BaseModel {
	protected static $table = 'user';

	protected $id;
	protected $phoneNumber;
	
	public static function write($db, $object) {
		if(isset($object->getId)){
			$db->insertOrUpdateOne(
				static::$table,
				'id = %i', $object->getId(),
				'phonenumber = %s', $object->getPhoneNumber()
			);
			if(!$object->getId()){
				$this->id = mysql_insert_id();
			}
		}else{
			$db->insertOrUpdateOne(
				static::$table,
				'phonenumber = %s', $object->getPhoneNumber()
			);
			if(!$object->getId()){
				$this->id = mysql_insert_id();
			}
		}
	}

	protected static function loadFromSqlRow($row) {
		$object = new self;

		$object->setId($row->i_id);
		$object->setPhoneNumber($row->s_phonenumber);

		return $object;
	}
	public static function loadByPhoneNumber($db, $phonenumber){
		$row = $db->selectOne("
			SELECT *
			FROM user
			WHERE phonenumber = %s
		",
		$phonenumber
		);

		if(!$row){
			return null;
		}

		return static::loadFromSqlRow($row);
	}
}
?>