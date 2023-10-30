<?php

include('classes/cookie.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php
        $cookie = new Cookie();
        $cookie->setType('овсяное');
        $cookie->setType('шоколадное');
        $cookie->setType('не овсяное');
        $cookie->setType('хворост');

        $types = implode(", ", $cookie->getType());
        ?>
        <p>
            Виды печенья:
            <?= $types ?>
        </p>
    </div>
</body>

</html>

<?php
function showCookiesType($cookie)
{
    $types = implode(",", $cookie->getType());
    echo "<p>{$types}</p>";
}
?>