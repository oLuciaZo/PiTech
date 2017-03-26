<?php
/**
 * Created by PhpStorm.
 * User: sitita
 * Date: 3/21/2017 AD
 * Time: 20:48
 */
class Model_users extends CI_Model{
    function __construct()
    {
            parent::__construct(); // Call the Model constructructor
    }

    function getFirstNames(){
        $query = $this->db->query('SELECT username FROM users');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }

    function getUsers(){
        $query = $this->db->query('SELECT * FROM users');

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }
}