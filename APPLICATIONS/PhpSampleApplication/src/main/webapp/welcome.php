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
        <div align="right">
            <h2><a href="logout.php">Sign Out</a></h2>
        </div>
    <body>
        <h1>Welcome <?php echo $login_session; ?></h1>

        <h2>Welcome <?php echo $_SESSION['login_user'] ?></h2>
    </body>
</html>

