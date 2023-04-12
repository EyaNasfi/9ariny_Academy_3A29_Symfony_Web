<?php
include '../Controller/ReserveR.php';
$ReserveR = new ReserveR();
$list = $ReserveR->listereserve();
?>
<html>

<head></head>

<body>

    <center>
        <h1>List of Reserve</h1>
        <h2>
            <a href="addreserve.php">Add Reserve</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Idreserve</th>
            <th>Nclient</th>
            <th>Tarife</th>
            <th>Stat</th>
            <th>Datereserve</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $Reserve) {
        ?>
            <tr>
                <td><?= $Reserve['Idreserve']; ?></td>
                <td><?= $Reserve['Nclient']; ?></td>
                <td><?= $Reserve['Tarife']; ?></td>
                <td><?= $Reserve['Stat']; ?></td>
                <td><?= $Reserve['Datereserve']; ?></td>
                <td align="center">
                    <form method="POST" action="Updatereserve.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $Reserve['Idreserve']; ?> name="Idreserve">
                    </form>
                </td>
                <td>
                    <a href="Deletereserve.php?Idreserve=<?php echo $Reserve['Idreserve']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>