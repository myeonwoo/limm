<?php
class Crud_example extends Controller {
  
  public function __construct(){
    parent::Controller();
  }
  
  public function add_user(){
    
    $data = array(
      'username' => 'myuser',
      'password' => 'mypass',
      'email' => 'my@email.com'
    );
    
    $u = new User();
    
    $u->fromArray($data);
    
    $u->save();
    
    echo 'Done';
        
  }
  
  public function add_user_flash(){
    
    $user_id = 'myuser';
    if (!$temp = Doctrine::getTable('User')->findOneByUsername($user_id)) {
      $u = new User();
      $u->username = 'myuser';
      $u->password = 'mypass';
      $u->email = 'hi@email.com';
    }
    
    $user_id = 'foouser';
    if (!$temp = Doctrine::getTable('User')->findOneByUsername($user_id)) {
      $u2 = new User();
      $u2->username = 'foouser';
      $u2->password = 'foopass';
      $u2->email = 'hello@email.com';
    }
    $conn = Doctrine_Manager::connection();
    
    $conn->flush();
    echo 'Done';
  }
  
  public function read_find(){
    
    $user_id = 1;
    $u = Doctrine::getTable('User')->find($user_id);
    
    echo $u->username;
  }
  
  public function read_findOneBy(){
    
    $username = 'myeonwoo';
    
    $u = Doctrine::getTable('User')->findOneByUsername($username);
    echo $u->username;
  }
  
  public function read_findBy(){
    
    $users = Doctrine::getTable('User')->findByEmail('myeonwoo@gmail.com');
    
    echo $users[0];
    echo $users[1];
  }
  
  public function read_dql(){
    
    $id = 10;
    $q = Doctrine_Query::create()->select('username')->from('User')->where('id < ?', $id);
    
    $users = $q->execute();
    
    echo $users[0]->username . '<br />';
    echo $users[1]->username;
  }
  
  public function read_toArray(){
    
    $user_id = 1;
    $u = Doctrine::getTable('User')->find($user_id);
    $u_arr = $u->toArray();
    print_r($u_arr);
  }
  
  public function update_recordObject(){
    
    $user_id = 1;
    $u = Doctrine::getTable('User')->find($user_id);
    $u->password = 'password';
    $u->save();
  }
  
  public function update_dql(){
    
    $user_id = 2;
    $q = Doctrine_Query::create()->update('User')->set('id','?',$user_id)->where('id=1');
    $numrows = $q->execute();
    echo "$numrows records updated";
  }
  
  public function delete_recordObject(){
    $user_id = 5;
    $u = Doctrine::getTable('User')->find($user_id);
    $u->delete();
  }
  
  public function delete_dql(){
    
    $q = Doctrine_Query::create()->delete('User')->where('id=6');
    
    $nus = $q->execute();
    echo "$nus records deleted";
  }
}
