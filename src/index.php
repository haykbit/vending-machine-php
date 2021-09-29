<?php
session_start();
include("database/db.php");
include("functions/create-machine.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./utils/js/button-control.js"></script>
    <link rel="stylesheet" href="utils/style/style.css">
    <title>Docker PHP</title>
</head>

<body>
    <div class="container">
        <div class="product-container">
            <?php echo createMachine($array); ?>
        </div>
        <div class="form-container">
            <form action="functions/vending.php" method="POST">
                <input type="text" name="selector" id="selector-input" placeholder="Choose a drink" readonly />
                <div class="select-buttons">
                    <input type="button" class="fbutton" value="F01" />
                    <input type="button" class="fbutton" value="F02" />
                    <input type="button" class="fbutton" value="F03" />
                </div>
                <input type="text" name="coins" id="coins-input" placeholder="0,00 €" readonly />
                <div class="coin-buttons">
                    <input type="button" class="cbutton" value="0.05 € " name="coin" />
                    <input type="button" class="cbutton" value="0.10 €" name=" coin" />
                    <input type="button" class="cbutton" value="0.25 €" name="coin" />
                    <input type="button" class="cbutton" value="1.00 €" name="coin" />
                    <h3><?php echo $_SESSION["error"] ?></h3>
                </div>
                <button type="submit" value="Buy" name="buy_product">Buy</button>
            </form>
        </div>

    </div>
</body>

</html>