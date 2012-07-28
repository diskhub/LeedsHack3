<?php
/* START AUTO */
abstract class leedshack__BaseModel {
	protected static $table;
	public function __call($name, $args) {
		$action = substr($name, 0, 3);
		// Assume camel case
		$var = lcfirst(substr($name, 3));
		switch($action) {
			case 'get':
				if(!in_array($var, array_keys(get_object_vars($this)))) {
					return null;
				} else {
					return $this->$var;
				}
				break;
			case 'set':
				if(!in_array($var, array_keys(get_object_vars($this)))) {
					return false;
				} else {
					$this->$var = $args[0];
					return true;
				}
				break;
			default:
				throw new Exception('Missing call actions');
		}
	}

	abstract public static function write($db, $object);
	abstract protected static function loadFromSqlRow($row);

	public static function loadAll($db, $order = null, $limit = null, $offset = null) {
		$data = $db->fetch('*', static::$table, null, $order, $offset, $limit);

		if(!$data) { return false; }

		$returnArray = array();
		foreach($data as $item) {
			$returnData[] = static::loadFromSqlRow($item);
		}
		return $returnData;
	}

	public static function count($db) {
		$count = $db->count(static::$table);
		return $count;
	}
	

/* FINISH AUTO */

}
?>
