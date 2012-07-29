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
			'is_active = %i', $object->getIsactive()
		);

		if(!$object->getId()) {
			$object->setId($db->lastInsertId());
		}
	}

	protected static function loadFromSqlRow($row) {
		$object = new self;

		$object->setId($row->i_id);
		$object->setQmId($row->i_qm_id);
		$object->setName($row->s_name);
		$object->setIsactive($row->i_is_active);

		return $object;
	}
	public static function loadById($db, $id){
		$row = $db->fetchOne('*',static::$table, "id = %i", $id);
		if(!$row){
			return false;
		}
		return static::loadFromSqlRow($row);
	}

	public static function loadAllByUserId($db, $userId) {
		$rows = $db->fetch('*', static::$table, 'qm_id = %i', (string)$userId);
		if(!$rows) { 
			return array();
		}

		$quizzes = array();
		foreach($rows as $row) {
			$quizzes[] = static::loadFromSqlRow($row);
		}

		return $quizzes;
	}
}
?>
