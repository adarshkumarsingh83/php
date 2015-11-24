<!--
/**
 * Created by IntelliJ IDEA.
 * User: Adarsh_K
 * Date: 18/7/13
 * Time: 4:54 PM
 * To change this template use File | Settings | File Templates.
 */

-->
<html>
<head>
    <title>Index page</title>
</head>
<body>

</body>
</html>


<?php
include_once('\\WEB-INF\\php\\applicationConfiguration.php');
session_start();
if (!$_SESSION['loggedin']) {
    header("location: login.php");
}
include(INCLUDE_PATH . "lock.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <title>Welcome </title>
</head>
<h2 style="text-align: left">Welcome <?php echo $_SESSION['login_user'] ?></h2>

<div align="right">
    <h3><a href="logout.php">Sign Out</a></h3>
</div>
<body>


<div style="text-align: center">
    <table>
        <tr>
            <td>EMPLOYEE INSERT PAGE</td>
            <td><a href="insertPage.php">INSERT PAGE LINK</a></td>
        </tr>
        <tr>
            <td>EMPLOYEE UPDATE PAGE</td>
            <td><a href="updatePage.php">UPDATE PAGE LINK</a></td>
        </tr>
        <tr>
            <td>EMPLOYEE SELECT PAGE</td>
            <td><a href="selectPage.php">SELECT PAGE LINK</a></td>
        </tr>
        <tr>
            <td>EMPLOYEE DELETE PAGE</td>
            <td><a href="deletePage.php">DELETE PAGE LINK</a></td>
        </tr>
    </table>
</div>
</body>
</html>