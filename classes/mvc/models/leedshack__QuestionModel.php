<?php
/* START AUTO */
class leedshack__QuestionModel extends leedshack__BaseModel {
	protected static $table = 'question';

	protected $id;
	protected $question;
	protected $answer;
	protected $quiz_id;
	
	public static function write($db, $object) {
		$db->insertOrUpdateOne(
			static::$table,
			'id = %i', $object->getId(),
			'question = %s', $object->getQuestion(),
			'answer = %a', $object->getAnswer(),
			'quiz_id = %q', $object->getQuiz_id()
		);
	}

	protected static function loadFromSqlRow($row) {
		$object = new self;

		$object->setId($row->i_id);
		$object->setQuestion($row->s_question);
		$object->setAnswer($row->a_answer);
		$object_>setQuiz_id($row->q_quiz_id);

		return $object;
	}
	
/* FINISH AUTO */

}
?>
