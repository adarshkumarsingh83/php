<!--
/**
 * Created by IntelliJ IDEA.
 * User: Adarsh_K
 * Date: 18/7/13
 * Time: 4:58 PM
 * To change this template use File | Settings | File Templates.
 */
 -->
<?php
include_once('\\WEB-INF\\php\\applicationConfiguration.php');
include(INCLUDE_PATH . "databaseConfiguration.php");
?>

<html>
<head>
    <title>
        <h1>UPDATE PAGE</h1>
    </title>
</head>
<body>
<div style="text-align: left">
    <a href="userPage.php">HOME PAGE</a>
</div>
<form  method="post" action="<?php $_PHP_SELF ?>">
    <table>
        <tr>
            <td>Enter the Employee id </td>
            <td><input type="text" name="empId"</td>
        </tr>
        <tr>
            <td>Enter the Employee Name </td>
            <td><input type="text" name="empName"</td>
        </tr>
        <tr>
            <td>Enter the Employee Email </td>
            <td><input type="text" name="empEmail"</td>
        </tr>
        <tr>
            <td>Enter the Employee Phone </td>
            <td><input type="text" name="empPhone"</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" value="Save"></td>
        </tr>
    </table>
</form>
</body>
</html>