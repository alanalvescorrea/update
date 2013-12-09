<?php

// Connect to server and select database.
mysql_connect("localhost", "root", "") or die("cannot connect");
mysql_select_db("cdcol") or die("cannot select DB");

/* update data in mysql database 
  $sql="UPDATE cds SET titel='titel', interpret='interpret' WHERE id='id'" or die ("this stuffed up");
  $result=mysql_query($sql) or die ("this stuffedup"); */

$sql = "UPDATE cds SET titel='" . $_POST['titel'] . "', interpret='" . $_POST['interpret'] . "' WHERE id='" . $_POST['id'] . "'";

$result = mysql_query($sql) or
        die("this stuffedup");


// if successfully updated. 
if ($result) {
    echo "Successful";
    echo "<BR>";
    echo "<a href='listar.php'>View result</a>";
} else {
    echo "ERROR";
}
?>