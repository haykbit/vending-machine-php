<?php include("database/db.php")  ?>
<?php include("functions/create-machine.php") ?>
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
            <form action="functions/vending.php" method="POST">
                <?php echo build_table($array); ?>
                <input type="text" name="selector" id="selector-input" />
                <button type="submit" value="Buy" name="buy_product">Buy</button>
            </form>
            <button class="fbutton" value="F01">F01</button>
            <button class="fbutton" value="F02">F02</button>
            <button class="fbutton" value="F03">F03</button>
        </div>
    </div>
</body>

</html>