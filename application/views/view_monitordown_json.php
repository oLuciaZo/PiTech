<?php
/**
 * Created by PhpStorm.
 * User: sitita
 * Date: 3/24/2017 AD
 * Time: 13:38
 */
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
if(isset($mon)) {
    $outp = '{ "success": true,"monitor" : ';
    $outp .= '[';
    foreach($mon as $object) {

        /*
            $outp .= '{"hostname['.$count.']":"'  . $row["1"] . '",';
            $outp .= '"macaddr['.$count.']":"'   . $row["2"]        . '",';
            $outp .= '"ip['.$count.']":"'   . $row["3"]        . '",';
            $outp .= '"flag['.$count.']":"'. $row["4"]     . '"}';
            */

        $outp .= '{"name":"' . $object->int_name . '",';
        $outp .= '"macaddress":"' . $object->data_mac . '",';
        $outp .= '"time":"' . $object->data_time . '"},';

    }
    $outp = substr($outp, 0, -1);
    $outp .= "]";
    $outp .= "}";
    print $outp;

}else{
    print "Not Found Data";
}
?>