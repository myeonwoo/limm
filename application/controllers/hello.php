<?php
// system/application/controllers/hello.php

class Hello extends Controller {

	function world() {
		echo "Hello CodeIgniter!";
	}

	function user_test() {

		$u = new User2;
		$u->username = 'johndoe';
		$u->password = 'secret';
		$u->first_name = 'John';
		$u->last_name = 'Doe';
		$u->save();

		$u2 = new User2;
		$u2->username = 'phprocks';
		$u2->password = 'mypass';
		$u2->first_name = 'Codeigniter';
		$u2->last_name = 'Doctrine';
		$u2->save();

		echo "added 2 users";
	}

}
