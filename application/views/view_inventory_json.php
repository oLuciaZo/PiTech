<?php
/**
 * Created by PhpStorm.
 * User: sitita
 * Date: 3/26/2017 AD
 * Time: 17:13
 */
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$outp = '{ "success": true,"inventory" : ';
$outp .= '[';
if(isset($data)) {
    foreach ($data as $object) {

        /*
            $outp .= '{"hostname['.$count.']":"'  . $row["1"] . '",';
            $outp .= '"macaddr['.$count.']":"'   . $row["2"]        . '",';
            $outp .= '"ip['.$count.']":"'   . $row["3"]        . '",';
            $outp .= '"flag['.$count.']":"'. $row["4"]     . '"}';
            */

        $outp .= '{"name":"' . $object->int_name . '",';
        $outp .= '"temp":"' . $object->int_temp . '",';
        $outp .= '"macaddress":"' . $object->int_mac . '"},';

    }
    $outp = substr($outp, 0, -1);
    $outp .= "]";
    $outp .= "}";
    print $outp;
}else{
    print "data not found";
}