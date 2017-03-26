<?php
class Model_json extends CI_Model{
    function __construct()
    {
            parent::__construct(); // Call the Model constructructor
    }

    function model_monitor_up_json() {

        $query = $this->db->query('SELECT `int_name`,`data_mac`,`data_humidity1`,`data_humidity2`,`data_humidity3`,`data_humidity4`,`data_temp1`,`data_temp2`,`data_temp3`,`data_temp4`,`data_time`,`int_temp`
            FROM iot_data INNER JOIN iot_inventory ON `data_mac` = `int_mac` WHERE data_no IN (SELECT MAX(data_no) FROM iot_data GROUP BY data_mac) AND `data_time` >= NOW() - INTERVAL 15 MINUTE ');
        if($query->num_rows() > 0){
                return $query->result();
            }else{
                return NULL;
            }
        }

    function model_monitor_down_json(){

        $query = $this->db->query('SELECT `int_name`,`data_mac`,`data_time` FROM iot_data INNER JOIN iot_inventory ON `data_mac` = `int_mac` WHERE data_no IN (SELECT MAX(data_no) FROM iot_data GROUP BY data_mac)  AND `data_time` < NOW() - INTERVAL 15 MINUTE');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }

    function model_chart_json($macaddr){

        $query = $this->db->query("SELECT HOUR(data_time),data_mac,data_temp1,data_temp2,data_temp3,data_temp4 FROM iot_data WHERE data_time>=CURDATE() AND data_mac='$macaddr'");
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
        //return "SELECT HOUR(data_time),data_mac,data_temp1,data_temp2,data_temp3,data_temp4 FROM iot_data WHERE data_time>=CURDATE() AND data_mac='$macaddr'";
    }

    function model_chart($macaddr){

        $query = $this->db->query("SELECT int_name FROM iot_inventory WHERE int_mac='$macaddr'");
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
        //return "SELECT HOUR(data_time),data_mac,data_temp1,data_temp2,data_temp3,data_temp4 FROM iot_data WHERE data_time>=CURDATE() AND data_mac='$macaddr'";
    }

    function inventory(){

        $query = $this->db->query("SELECT `int_mac`, `int_name`, `int_temp` FROM `iot_inventory` WHERE 1");
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
        //return "SELECT HOUR(data_time),data_mac,data_temp1,data_temp2,data_temp3,data_temp4 FROM iot_data WHERE data_time>=CURDATE() AND data_mac='$macaddr'";
    }


}