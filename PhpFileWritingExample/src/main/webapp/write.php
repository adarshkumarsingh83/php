<!--
/**
 * Created by IntelliJ IDEA.
 * User: Adarsh_K
 * Date: 18/7/13
 * Time: 3:15 PM
 * To change this template use File | Settings | File Templates.
 */

-->

<html>
<head>
    <title>Writing a file using PHP</title>
</head>
<body>

<?php
$filename = "c:\\MYHOME\\SAMPLE.txt";
$file = fopen($filename, "w");
if ($file == false) {
    echo("Error in opening new file");
    exit();
}
fwrite($file, $_POST['text']);
fclose($file);

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