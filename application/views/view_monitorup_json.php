<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

    //$count=0;
    $outp = '{ "success": true,"monitor" : ';
    $outp .= '[';
if(isset($mon)) {
    foreach ($mon as $object) {

        /*
            $outp .= '{"hostname['.$count.']":"'  . $row["1"] . '",';
            $outp .= '"macaddr['.$count.']":"'   . $row["2"]        . '",';
            $outp .= '"ip['.$count.']":"'   . $row["3"]        . '",';
            $outp .= '"flag['.$count.']":"'. $row["4"]     . '"}';
            */

        $outp .= '{"name":"' . $object->int_name . '",';
        $outp .= '"macaddress":"' . $object->data_mac . '",';
        $outp .= '"humidity1":"' . $object->data_humidity1 . '",';
        $outp .= '"temp1":"' . $object->data_temp1 . '",';
        $outp .= '"humidity2":"' . $object->data_humidity2 . '",';
        $outp .= '"temp2":"' . $object->data_temp2 . '",';
        $outp .= '"humidity3":"' . $object->data_humidity3 . '",';
        $outp .= '"temp3":"' . $object->data_temp3 . '",';
        $outp .= '"humidity4":"' . $object->data_humidity4 . '",';
        $outp .= '"temp4":"' . $object->data_temp4 . '",';
        $outp .= '"temp_heat":"' . $object->int_temp . '",';
        $outp .= '"time":"' . $object->data_time . '"},';

    }
    $outp = substr($outp, 0, -1);
    $outp .= "]";
    $outp .= "}";
    print $outp;
}else{
    print "No Data Found";
}


    ?>