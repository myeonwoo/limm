<?php
class Thread extends Doctrine_Record {

	public function setTableDefinition() {
		$this->hasColumn('title', 'string', 255);
		$this->hasColumn('forum_id', 'integer', 4);
	}

	public function setUp() {
		$this->hasOne('Forum', array(
			'local' => 'forum_id',
			'foreign' => 'id'
		));
		$this->hasMany('Post as Posts', array(
			'local' => 'id',
			'foreign' => 'thread_id'
		));
	}
	
	public function getPostsArray($offset, $limit) {
	    $posts = Doctrine_Query::create()
	    ->select('p.content as content, p.created_at as post_date')
	    //->addSelect('u.username as username')
	    ->from('Post p')
	    ->where('p.thread_id = ?', $this->id)
	    ->orderBy('post_date DESC')
	    ->limit($limit)
	    ->offset($offset)
	    ->setHydrationMode(Doctrine::HYDRATE_ARRAY)
	    ->execute();
	    
	    foreach ($posts as &$post) {
	        unset($post['User']);
	    }
	
	    return $posts;
	    
	    $q = Doctrine_Query::create()
	    ->select('p.content as content, p.created_at as post_date, u.username as username')
	    ->from('Post p, User u')
	    ->where('p.user_id=u.id and p.thread_id = ?', $this->id)
	    ->orderBy('post_date DESC')
	    ->limit(2);
	    
	    
	    return $q->execute();
	    
	    
	    
	    
	
	}

}