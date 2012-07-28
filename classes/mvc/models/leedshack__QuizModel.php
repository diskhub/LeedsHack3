<?php
/* START AUTO */
class leedshack__QuizModel extends leedshack__BaseModel {
	protected static $table = 'quiz';

	protected $id;
	protected $name;
	protected $qmId;
	protected $isactive;
	
	public static function write($db, $object) {
		$db->insertOrUpdateOne(
			static::$table,
			'id = %i', $object->getId(),
			'name = %s', $object->getName(),
			'qm_id = %i', $object->getQmId(),
			'isactive = %i', $object->getIsactive()
		);
	}

	protected static function loadFromSqlRow($row) {
		$object = new self;

		$object->setId($row->i_id);
		$object->setQmId($row->i_qm_id);
		$object->setName($row->s_name);
		$object->setIsactive($row->i_isactive);

		return $object;
	}
	public static function loadById($db, $id){
		$row = $db->fetch('*',static::$table, 'id = %i', $id);
		if(!$row){
			throw new Exception();

		}
		return static::loadFromSqlRow($row);
	}
}
?>