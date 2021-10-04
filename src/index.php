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
    <script type="text/javascript" src="./utils/js/generalController.js"></script>
    <link rel="stylesheet" href="utils/style/style.css">
    <link rel="icon" type="image/png" href="assets/product-1.png" />
    <title>Vending Machine</title>
</head>

<body>
    <div class="root">
        <div class="container">
            <div class="product-container">
                <?php echo createMachine($array); ?>
            </div>
            <div class="form-container">
                <form action="functions/vending.php" method="POST">
                    <div class="selector-container">
                        <input type="text" name="selector" id="selector-input" placeholder="Choose a drink" readonly />
                        <div class="select-buttons">
                            <input type="button" class="fbutton button btn-mix-nb retro-primary" value="F01" />
                            <input type="button" class="fbutton button btn-mix-nb retro-primary" value="F02" />
                            <input type="button" class="fbutton button btn-mix-nb retro-primary" value="F03" />
                        </div>
                    </div>
                    <input type="text" name="coins" id="coins-input" placeholder="0,00 €" readonly />
                    <div class="coin-buttons">
                        <input type="button" class="cbutton button btn-mix-nb retro-mix-primary" value="0.05 € " name="coin" />
                        <input type="button" class="cbutton button btn-mix-nb retro-mix-primary" value="0.10 €" name=" coin" />
                        <input type="button" class="cbutton button btn-mix-nb retro-mix-primary" value="0.25 €" name="coin" />
                        <input type="button" class="cbutton button btn-mix-nb retro-mix-primary" value="1.00 €" name="coin" />
                    </div>
                    <button type="submit" value="Buy" name="buy_product" class="button btn-mix-nb retro-mix-secondary" id="buy-button">Buy</button>
                </form>
                <button value="Cancel" name="restart" class="button btn-mix-nb retro-mix-red" id="restart">Cancel</button>
                <h3><?php echo $_SESSION["error"];
                    echo $_SESSION["errorStock"]; ?></h3>
            </div>
        </div>
        <div class="vending-container">
            <?php
            if ($_SESSION["succes"] == "F01") {
                echo '<div class="vending-door" style="background-image: url(assets/door-water.png);">
                </div>';
            } else if ($_SESSION["succes"] == "F02") {
                echo '<div class="vending-door" style="background-image: url(assets/door-juice.png);">
                </div>';
            } else if ($_SESSION["succes"] == "F03") {
                echo '<div class="vending-door" style="background-image: url(assets/door-soda.png);">
                </div>';
            } else {
                echo '<div class="vending-door">
                </div>';
            }
            ?>
            <div class="change-container">
                <h3 id="change-text"><?php echo $_SESSION["change"] ?></h3>
                <?php session_unset(); ?>
            </div>
        </div>
    </div>
</body>

</html>