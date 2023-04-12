<?php

include '../Controller/ReserveR.php';

$error = "";

// create Reserve
$Reserve = null;

// create an instance of the controller
$ReserveR = new ReserveR();
if (
    isset($_POST["Idreserve"]) &&
    isset($_POST["Nclient"]) &&
    isset($_POST["Tarife"]) &&
    isset($_POST["Stat"]) &&
    isset($_POST["Datereserve"])
) {
    if (
        !empty($_POST["Idreserve"]) &&
        !empty($_POST['Nclient']) &&
        !empty($_POST["Tarife"]) &&
        !empty($_POST["Stat"]) &&
        !empty($_POST["Datereserve"])
    ) {
        $Reserve = new Reserve(
            $_POST['Idreserve'],
            $_POST['Nclient'],
            $_POST['Tarife'],
            $_POST['Stat'],
            new DateTime($_POST['Datereserve'])
        );
        $ReserveR->Updatereserve($Reserve, $_POST["Idreserve"]);
        header('Location:Listereserve.php');
    } else
        $error = "Missing information";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body>
    <button><a href="Listereserve.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['Idreserve'])) {
        $Reserve = $ReserveR->showreserve($_POST['Idreserve']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="Idreserve">Id reserve:
                        </label>
                    </td>
                    <td><input type="text" name="Idreserve" id="Idreserve" value="<?php echo $Reserve['Idreserve']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Nclient">N client:
                        </label>
                    </td>
                    <td><input type="text" name="Nclient" id="Nclient" value="<?php echo $Reserve['Nclient']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Tarife">Tarife:
                        </label>
                    </td>
                    <td><input type="text" name="Tarife" id="Tarife" value="<?php echo $Reserve['Tarife']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Stat">Stat:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Stat" value="<?php echo $Reserve['Stat']; ?>" id="Stat">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Datereserve">Date reserve:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="Datereserve" id="Datereserve" value="<?php echo $Reserve['Datereserve']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                    <td>
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>