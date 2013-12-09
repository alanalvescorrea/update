<title>Ports</title>
</head>

<?php
// Connect to server and select database.
mysql_connect("localhost", "root", "") or die("cannot connect");
mysql_select_db("cdcol") or die("cannot select DB");


$sql = "SELECT * FROM cds";
$result = mysql_query($sql);
?>
<body>


    <table width="1200" border="1" cellspacing="1" cellpadding="0">
        <tr>
            <td>
                <table width="1200" border="1" cellspacing="1" cellpadding="3">
                    <tr>
                        <td colspan="50"><strong>Pending Port Requests 2</strong> </td>
                    </tr>

                    <tr>
                        <td align="center"><strong>Customer</strong></td>
                        <td align="center"><strong>Number</strong></td>

                    </tr>

<?php
while ($rows = mysql_fetch_array($result)) {
    ?>
                        <tr>
                            <td><?php echo $rows['titel']; ?></td>
                            <td><?php echo $rows['interpret']; ?></td>
                            <td align="center"><a href="update.php?id=<?php echo $rows['id']; ?>">update</a></td>
                        </tr>

    <?php
}
?>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>