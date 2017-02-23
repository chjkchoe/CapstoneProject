<?php
Class User_model extends MY_Model
{
	var $table = 'user';

    function insertdata($options = array()){
        if(isset($options['name']))
            $this->db->set('name',strip_tags($options['name']));
        if(isset($options['email']))
            $this->db->set('email',strip_tags($options['email']));
        if(isset($options['password']))
            $this->db->set('password',strip_tags($options['password']));
        if(isset($options['address']))
            $this->db->set('address',($options['address']));
        if(isset($options['phone']))
            $this->db->set('phone',($options['phone']));
        $this->db->insert("user");
        return $this->db->insert_id();
    }
}

