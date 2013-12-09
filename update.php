<title>update</title>
</head>

<?php
// Connect to server and select database.
mysql_connect("localhost", "root", "") or die("cannot connect");
mysql_select_db("cdcol") or die("cannot select DB");

// get value of id that sent from address bar
$id = $_GET['id'];



// Retrieve data from database 
$sql = "SELECT * FROM cdcol.cds WHERE id = '$id'";
$result = mysql_query($sql);
$rows = mysql_fetch_array($result);
?>
<body>


    <table width="1200" border="0" cellspacing="1" cellpadding="0">
        <tr>
        <form name="form1" method="post" action="update_ac.php">
            <td>
                <table width="100%" border="0" cellspacing="1" cellpadding="0">
                    <tr>
                        <td>&nbsp;</td>
                        <td colspan="6"><strong>Update Porting Details</strong> </td>
                    </tr>
                    <tr>
                        <td align="center">&nbsp;</td>
                        <td align="center">&nbsp;</td>

                    </tr>
                    <tr>
                        <td align="center">&nbsp;</td>
                        <td align="center"><strong>Customer</strong></td>
                        <td align="center"><strong>Number</strong></td>

                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td align="center">
                            <input name="titel" type="text" id="Customer" value="<?php echo $rows['titel']; ?>"size= "15"/>
                        </td>
                        <td align="center">
                            <input name="interpret" type="text" id="Number" value="<?php echo $rows['interpret']; ?>" size="15"/>
                        </td>
                        <td align="center">
                    <tr>
                </table>
                <input name="id" type="hidden" id="id" value="<?php echo $rows['id']; ?>"/>
                <input type="submit" name="Submit" value="Submit" /></td>
            <td align="center">&nbsp;</td>
            </td>
        </form>
    </tr>
</table>
</body>
</html>