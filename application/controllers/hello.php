<?php
// system/application/controllers/hello.php

class Hello extends Controller {

	function world() {
		echo "Hello CodeIgniter!";
	}

	function user_test() {

		$u = new User;
		$u->firstname = 'Myeonwoo';
		$u->lastname = 'Lim';
		$u->username = 'limm';
		$u->password = 'limm';
		$u->email = 'myeonwoo.lim@gmail.com';
		$u->referer_id = 1;
		$u->status = 'verified';
		$u->save();

		echo "added 1 users";
	}

}
