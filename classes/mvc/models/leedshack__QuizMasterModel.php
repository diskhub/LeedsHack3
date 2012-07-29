<?php
/* START AUTO */
class leedshack__QuizMasterModel extends leedshack__BaseModel {
	protected static $table = 'quizmaster';

	protected $id;
	protected $email;
	protected $password;
	
	public static function write($db, $object) {
		$db->insertOrUpdateOne(
			static::$table,
			'id = %i', $object->getId(),
			'email = %s', $object->getEmail()
		);
	}

	protected static function loadFromSqlRow($row) {
		$object = new self;

		$object->setId($row->i_id);
		$object->setEmail($row->s_email);

		return $object;
	}
	
/* FINISH AUTO */

	public static function authenticate($db, $username, $password) {
		$user = $db->fetchOne('*', 'quizmaster', 'email = %s AND password = %s', $username, $password);
		if(!$user) {
			return false;
		}
		return static::loadFromSqlRow($user);
	}

	public static function loadById($db, $id) {
		$row = $db->fetchOne('*', static::$table, 'id = %i', (string)$id);
		if(!$row) {
			throw new Exception('Invalid ID');
		}
		return static::loadFromSqlRow($row);
	}

	public static function loadAll($db) {
		$rows = $db->fetch('*', static::$table);

		$users = array();
		foreach($rows as $row) {
			$users[] = static::loadFromSqlRow($db, $row);
		}

		return $users;
	}

}
?>
