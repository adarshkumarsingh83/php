<!--
/**
 * Created by IntelliJ IDEA.
 * User: Adarsh_K
 * Date: 18/7/13
 * Time: 10:16 AM
 * To change this template use File | Settings | File Templates.
 */
-->
<?php

function validate()
{

    if (!(empty($_GET["name"])) && (!empty($_GET["pwd"]))) {
        return true;
    } else {
        return false;
    }
}

if (validate()) {
    $name = $_GET["name"];
    $pwd = $_GET["pwd"];
    print("Welcome => " . $name . "<br> ");
    print("You pwd => " . $pwd . " ");
} else {
    header("Location: index.php");
}