<?php
/**
 * Created by IntelliJ IDEA.
 * User: Adarsh_K
 * Date: 18/7/13
 * Time: 10:01 AM
 * To change this template use File | Settings | File Templates.
 */

$indexedArray = array("Adarsh kumar", "Amit Kumar", "Radha Singh");
$arrayLength = count($indexedArray);

for ($index = 0; $index < $arrayLength; $index++) {
    echo $indexedArray[$index]. "<br>";
}
