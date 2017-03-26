<?php
/**
 * Created by PhpStorm.
 * User: sitita
 * Date: 3/26/2017 AD
 * Time: 15:46
 */
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
if(isset($macaddr)) {
    foreach($macaddr as $object){

    /*
        $outp .= '{"hostname['.$count.']":"'  . $row["1"] . '",';
        $outp .= '"macaddr['.$count.']":"'   . $row["2"]        . '",';
        $outp .= '"ip['.$count.']":"'   . $row["3"]        . '",';
        $outp .= '"flag['.$count.']":"'. $row["4"]     . '"}';
        */

    $outp .= '{"time":"'  . $object->data_time . '",';
    $outp .= '"macaddress":"'   . $object->data_mac       . '",';
    $outp .= '"temp1":"'   . $object->data_temp1        . '",';
    $outp .= '"temp2":"'   . $object->data_temp2        . '",';
    $outp .= '"temp3":"'   . $object->data_temp3        . '",';
    $outp .= '"temp4":"'. $object->data_temp4     . '"},';

}
$outp = substr($outp, 0,-1);
$outp .="]";
$outp .="}";
print $outp;

}else{
    print "Not Found Data";
}