<!--
/**
 * Created by IntelliJ IDEA.
 * User: Adarsh_K
 * Date: 18/7/13
 * Time: 3:10 PM
 * To change this template use File | Settings | File Templates.
 */
-->
<html>
<head>
<title>Reading a file using PHP</title>
</head>
<body>

<?php
$filename = "C:\\MYHOME\\SAMPLE.txt";
$file = fopen( $filename, "r" );
if( $file == false )
{
    echo ( "Error in opening file" );
    exit();
}
$filesize = filesize( $filename );
$filetext = fread( $file, $filesize );

fclose( $file );

echo ( "File size : $filesize bytes" );
echo ( "<pre>$filetext</pre>" );
?>

</body>
</html>