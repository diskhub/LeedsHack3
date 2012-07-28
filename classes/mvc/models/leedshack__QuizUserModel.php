<?php
/* START AUTO */
class leedshack__QuizUserModel extends leedshack__BaseModel {
	protected static $table = 'quizuser';

	protected $id;
	protected $quizId;
	protected $userId;
	
	public static function write($db, $object) {
		$db->insertOrUpdateOne(
			static::$table,
			'id = %i', $object->getId(),
			'quizid = %i', $object->getQuizId(),
			'userid = %i', $object->getUserId()
		);
	}

	protected static function loadFromSqlRow($row) {
		$object = new self;

		$object->setId($row->i_id);
		$object->setUserId($row->i_userid);
		$object->setQuizId($row->i_quizid);

		return $object;
	}

	public static function loadByUserID($db, $userid){
		$row = $db->fetch('*', static::$table, 'userid = %i', $id);
		if(!$row){
			throw new Exception();
		}

		return static::loadFromSqlRow($row);
	}
}
?>