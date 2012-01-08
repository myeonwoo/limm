<?php
class Forum extends Doctrine_Record {

	public function setTableDefinition() {
		$this->hasColumn('title', 'string', 255);
		$this->hasColumn('description', 'string', 255);
		$this->hasColumn('category_id', 'integer', 4);
	}

	public function setUp() {
		$this->hasOne('Category', array(
			'local' => 'category_id',
			'foreign' => 'id'
		));
		$this->hasMany('Thread as Threads', array(
			'local' => 'id',
			'foreign' => 'forum_id'
		));
	}

	public function numThreads() {

		$result = Doctrine_Query::create()
			->select('COUNT(*) as num_threads')
			->from('Thread')
			->where('forum_id = ?', $this->id)
			->setHydrationMode(Doctrine::HYDRATE_ARRAY)
			->fetchOne();

		return $result['num_threads'];

	}

	public function getThreadsArray($offset, $limit) {

		$threads = Doctrine_Query::create()
			->select('t.title')
			->addSelect('p.id, (COUNT(p.id) - 1) as num_replies')
			->addSelect('MIN(p.id) as first_post_id')
			->addSelect('MAX(p.created_at) as last_post_date')
			->from('Thread t, t.Posts p')
			->where('t.forum_id = ?', $this->id)
			->groupBy('t.id')
			->orderBy('last_post_date DESC')
			->limit($limit)
			->offset($offset)
			->setHydrationMode(Doctrine::HYDRATE_ARRAY)
			->execute();

		foreach ($threads as &$thread) {

			$post = Doctrine_Query::create()
				->select('p.created_at, u.username')
				->from('Post p, p.User u')
				->where('p.id = ?', $thread['Posts'][0]['first_post_id'])
				->setHydrationMode(Doctrine::HYDRATE_ARRAY)
				->fetchOne();

			$thread['num_replies'] = $thread['Posts'][0]['num_replies'];
			$thread['created_at'] = $post['created_at'];
			$thread['username'] = $post['User']['username'];
			$thread['user_id'] = $post['User']['id'];
			unset($thread['Posts']);

		}

		return $threads;

	}

}
