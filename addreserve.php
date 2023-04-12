<?php

include '../controller/ReserveR.php';

$error = "";

// create Reserve
$Reserve = null;

// create an instance of the controller
$ReserveR = new ReserveR();
if (
    isset($_POST["Nclient"]) &&
    isset($_POST["Tarife"]) &&
    isset($_POST["Stat"]) &&
    isset($_POST["Datereserve"])
) {
    if (
        !empty($_POST['Nclient']) &&
        !empty($_POST["Tarife"]) &&
        !empty($_POST["Stat"]) &&
        !empty($_POST["Datereserve"])
    ) {
        $Reserve = new Reserve(
            null,
            $_POST['Nclient'],
            $_POST['Tarife'],
            $_POST['Stat'],
            new DateTime($_POST['Datereserve'])
        );
        $ReserveR->addreserve($Reserve);
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
    <a href="Listereserve.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="1" align="center">

            <tr>
                <td>
                    <label for="Nclient">N client:
                    </label>
                </td>
                <td><input type="text" name="Nclient" id="Nclient" maxlength="20">
                <a id="test1"></a>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Tarife">Tarife:
                    </label>
                </td>
                <td><input type="text" name="Tarife" id="Tarife" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="Stat">Stat:
                    </label>
                </td>
                <td>
                    <input type="text" name="Stat" id="Stat">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Datereserve">Date reserve:
                    </label>
                </td>
                <td>
                    <input type="date" name="Datereserve" id="Datereserve">
                </td>
            </tr>
            <tr align="center">
                <td>
                    <input type="submit" value="Save">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <script src="Controle.js"></script>
</body>

</html>