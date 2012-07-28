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
			'answer = %s', $object->getAnswer(),
			'quiz_id = %i', $object->getQuiz_id()
		);
	}

	protected static function loadFromSqlRow($row) {
		$object = new self;

		$object->setId($row->i_id);
		$object->setQuestion($row->s_question);
		$object->setAnswer($row->s_answer);
		$object_>setQuiz_id($row->i_quiz_id);

		return $object;
	}
	
/* FINISH AUTO */

}
?>
