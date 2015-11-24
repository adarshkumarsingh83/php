<?php
/**
 * Created by IntelliJ IDEA.
 * User: Adarsh_K
 * Date: 16/7/13
 * Time: 3:28 PM
 * To change this template use File | Settings | File Templates.
 */
include_once('\\WEB-INF\\php\\applicationConfiguration.php');
include(INCLUDE_PATH."databaseConfiguration.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// username and password sent from form

    $myusername = addslashes($_POST['username']);
    $mypassword = addslashes($_POST['password']);


    $sql = "SELECT id FROM admin WHERE username='$myusername' and passcode='$mypassword'";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    $active = $row['active'];

    $count = mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
    if ($count == 1) {
        $_SESSION['login_user'] = $myusername;
        $_SESSION['loggedin'] = true;

        header("location: welcome.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}
