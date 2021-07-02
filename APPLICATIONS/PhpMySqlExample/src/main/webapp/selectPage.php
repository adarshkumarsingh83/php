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
        <h1>SELECT PAGE</h1>
    </title>
    <style type="text/css">
        @import "css/jquery.dataTables.css";
    </style>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function(){
           $('#dataTable').dataTable();
        });

    </script>


</head>
<body>
<div style="text-align: left">
    <a href="userPage.php">HOME PAGE</a>
</div>

<?php
$result = mysql_query("SELECT EMPID,EMPNAME,EMPEMAIL,EMPPHONE FROM EMPLOYEE");
echo "<br/><br/><table id='dataTable'><thead><tr><th></th><th>Name</th><th>Email</th><th>Contact</th></tr></thead><tbody>";
while ($row = mysql_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['EMPID'] . "</td><td> " . $row['EMPNAME'] . "</td><td> " . $row['EMPEMAIL'] . " </td><td>" . $row['EMPPHONE'] . "</td>";
    echo "</tr>";
}
echo "</tbody></table>";
?>
</body>
</html>