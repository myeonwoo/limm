<?php 
class Blog extends Model{
    
    function Blog(){
        parent::Model();
    }
    
    function get_post($thread_id){
        $sql = "select p.content, p.created_at as post_date, u.username, u.firstname, u.lastname
            from post P, user U
            where P.user_id=U.id and P.thread_id=$thread_id
            order by post_date desc";
        
        $q = $this->db->query($sql);
        $data = array();
        foreach ($q->result() as $row){
            $resrow = array();
            $resrow['post_date'] = $row->post_date;
            $resrow['username'] = $row->username;
            $resrow['firstname'] = $row->firstname;
            $resrow['lastname'] = $row->lastname;
            $resrow['content'] = $row->content;
            $data[] = $resrow;
            
        }
        return $data;
    }
    
    function get_thread_title($thread_id){
        $sql = "select title from thread where id=$thread_id limit 1";
        $q = $this->db->query($sql);
        return $q->row()->title;
        //return $q->row_array()['title'];
    }
}