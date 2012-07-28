<?php
/* START AUTO */
class leedshack__AnswerModel extends leedshack__BaseModel {
	protected static $table = 'answer';

	protected $id;
	protected $answer;
	protected $iscorrect;
	protected $user_id;
	protected $timestamp;
	protected $quiz_id;
	
	public static function write($db, $object) {
		$db->insertOrUpdateOne(
			static::$table,
			'id = %i', $object->getId(),
			'answer = %s', $object->getAnswer(),
			'iscorrect = %i', $object->getIscorrect(),
			'user_id = %i', $object->getUser_id(),
			'timestamp = %i', $object->getTimestamp(),
			'quiz_id = %i', $object->getQuiz_id()
		);
	}

	protected static function loadFromSqlRow($row) {
		$object = new self;

		$object->setId($row->i_id);
		$object->setAnswer($row->s_answer);
		$object->setIscorrect($row->i_iscorrect);
		$object->setUser_id($row->i_user_id);
		$object->setTimestamp($row->i_timestamp);
		$object_>setQuiz_id($row->i_quiz_id);

		return $object;
	}
	
/* FINISH AUTO */

}
?>
