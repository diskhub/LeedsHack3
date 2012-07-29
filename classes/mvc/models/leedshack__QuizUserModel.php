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
	public static function deleteByUserId($db, $userid){
		$db->delete(static::$table, 'userid = %i', $userid);
	}
	protected static function loadFromSqlRow($row) {
		$object = new self;

		$object->setId($row->i_id);
		$object->setUserId($row->i_userid);
		$object->setQuizId($row->i_quizid);

		return $object;
	}

	public static function loadActiveQuizByUserId($db, $userid){
		$row = $db->fetchOne("*",static::$table, "userid = %i",$userid);
		if(!$row){
			return null;
		}
		$quizid = $row->i_quizid;
		$rw = $db->fetchOne("*","quiz", "id = %i", $quizid);
		return static::loadFromSqlRow($rw);
	}
}
?>