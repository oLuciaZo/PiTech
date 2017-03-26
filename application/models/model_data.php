<?php
class Model_data extends CI_Model{
    function __construct()
    {
        parent::__construct(); // Call the Model constructructor
    }

    function update_inventory($mac,$name,$temp) {

        //$query = $this->db->query("UPDATE `iot_inventory` SET `int_name` = '$name' ,`int_temp` = '$temp' WHERE `int_mac` = '$mac' ");
        /*if($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }*/
        //$query->result();
        $value=array('int_name'=>$name,'int_temp'=>$temp);
        $this->db->where('int_mac',$mac);
        $this->db->update('iot_inventory',$value);
    }



}