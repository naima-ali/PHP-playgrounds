<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kittens</title>
</head>
<body>
<?php

$numberOfKittens = 7;

for ($i = 1; $i <= $numberOfKittens; $i++) {
    ?>
    Cat <?php echo $i; ?>:
    <img src="/cat.jpg" alt="Cat <?php echo $i; ?>">
    <?php
}

?>
</body>
</html>