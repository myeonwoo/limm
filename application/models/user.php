<?php
// system/application/models/user.php
class User extends Doctrine_Record {
    

    public function setTableDefinition() {
        $this->hasColumn('username', 'string', 255);
        $this->hasColumn('password', 'string', 255);
        $this->hasColumn('first_name', 'string', 255);
        $this->hasColumn('last_name', 'string', 255);
    }
    
    public function setUp(){
        $this->setTableName('user');
        $this->actAs('Timestampable');
        $this->hasMutator('password','_encrypt_password');
        
    }

    protected function _encrypt_password($value){
        $salt = '#*seCrEt!@-*%';
        $this->_set('password', md5($salt . $value));
    }
}
