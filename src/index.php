<?php include("database/db.php")  ?>
<?php include("functions/create-machine.php") ?>
<?php include("functions/vending.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./utils/js/button-control.js"></script>
    <title>Docker PHP</title>
</head>

<body>
    <div class="container">
        <div class="product-container">
            <?php echo build_table($array); ?>
            <form action="functions/vending.php" method="POST">
                <input type="text" name="selector" id="selector-input" readonly />
                <button type="submit" value="Buy" name="buy_product">Buy</button>
            </form>
            <div class="f-buttons">
                <button class="fbutton" value="F01">F01</button>
                <button class="fbutton" value="F02">F02</button>
                <button class="fbutton" value="F03">F03</button>
            </div>
            <div class="coin-buttons">
                <form action="functions/vending.php" method="POST">
                    <input type="submit" value="0.05" name="coin" />
                    <input type="submit" value="0.10" name="coin" />
                    <input type="submit" value="0.25" name="coin" />
                    <input type="submit" value="1" name="coin" />
                </form>
                <h3><?php countCoins() ?></h3>
            </div>
        </div>
    </div>
</body>

</html>