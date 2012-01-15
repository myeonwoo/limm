<?php
class User extends Doctrine_Record
{
	// define table columns in this function
	public function setTableDefinition() {

	    $this->hasColumn('firstname','string', 255);
	    $this->hasColumn('lastname','string', 255);
		$this->hasColumn('username', 'string', 255);
		$this->hasColumn('password', 'string', 255);
		$this->hasColumn('email', 'string', 255, array(
			'email' => true // It can validate e-mail input
		));

		// supports many column types, including enum
		$this->hasColumn('status', 'enum', null,
			array('values' => array('unverified', 'verified', 'disabled'))
		);

		$this->hasColumn('referer_id', 'integer', 4);
	}

	// setup some options
	public function setUp() {

		// creates a relationship with a model named Post
		$this->hasMany('Post as Posts', array(
			'local' => 'id',
			'foreign' => 'post_id'
		));

		/*
		 * 
		 * can even have a relationship with itself
		 * 
		
		$this->hasOne('User as Referer', array(
			'local' => 'referer_id',
			'foreign' => 'id'
		));
		
		*/

		// causes 'created_at' and 'updated_at' fields to be updated automatically
		$this->actAs('Timestampable');

		// password field gets a mutator assigned, for automatic encryption
		$this->hasMutator('password', 'md5Password');

	}

	// a mutator function
	public function md5Password($value) {
		$this->_set('password', md5($value));
	}

}
