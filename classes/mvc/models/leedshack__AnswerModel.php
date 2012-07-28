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
			'answer = %a', $object->getAnswer(),
			'iscorrect = %c', $object->getIscorrect(),
			'user_id = %u', $object->getUser_id(),
			'timestamp = %t', $object->getTimestamp(),
			'quiz_id = %q', $object->getQuiz_id()
		);
	}

	protected static function loadFromSqlRow($row) {
		$object = new self;

		$object->setId($row->i_id);
		$object->setAnswer($row->a_answer);
		$object->setIscorrect($row->c_iscorrect);
		$object->setUser_id($row->u_user_id);
		$object->setTimestamp($row->t_timestamp);
		$object_>setQuiz_id($row->q_quiz_id);

		return $object;
	}
	
/* FINISH AUTO */

}
?>
