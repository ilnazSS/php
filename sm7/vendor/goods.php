<?php
include_once("connect/connect.php");

function getGoodsCountByCategory()
{
    global $connection;

    $sql = "SELECT `category`.`name`, COUNT(*) AS `count` FROM `goods`
          JOIN `category` ON `goods`.`category_id` = `category`.`id`
          GROUP BY `category`.`id`";

    $statement = $connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}

function getGoodsList()
{
    global $connection;

    $sql = "SELECT `goods`.`name`, `goods`.`price`, `goods`.`weight`, `category`.`name` AS `category_name`
          FROM `goods`
          JOIN `category` ON `goods`.`category_id` = `category`.`id`";

    $statement = $connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}

function getGoodsAvgPrice()
{
    global $connection;

    $sql = "SELECT AVG(`price`) AS `avg` FROM `goods`";

    $statement = $connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    return number_format($result['avg'], 2, '.', ' ');
}

function getGoodsWeightSum()
{
    global $connection;

    $sql = "SELECT SUM(`weight`) AS `sum` FROM `goods`";

    $statement = $connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    return number_format($result['sum'] / 1000, 2, '.', ' ');
}

?>