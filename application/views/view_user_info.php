<?php
/**
 * Created by PhpStorm.
 * User: sitita
 * Date: 3/21/2017 AD
 * Time: 22:16
 */
foreach ($users as $object){
    print $object->username .'\'s email address is '. $object->email .'<br/>';
}

?>


<form method="post" action="../controller_home/post">
    <input type="text" name="name" id="name">
    <input type="submit">

</form>