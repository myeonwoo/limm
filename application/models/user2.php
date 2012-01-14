<?php
// system/application/models/user.php
class User2 extends Doctrine_Record {

	public function setTableDefinition() {
		$this->hasColumn('username', 'string', 255);
		$this->hasColumn('password', 'string', 255);
		$this->hasColumn('first_name', 'string', 255);
		$this->hasColumn('last_name', 'string', 255);
	}

}
