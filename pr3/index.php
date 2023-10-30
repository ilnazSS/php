<?

class Animal
{
    public $weight, $color, $age;

    function info()
    {
        echo 'Weight:' . $this->weight . '<br>' . 'Color:' . $this->color . '<br>' . 'Age:' . $this->age;
    }
}



class Lion extends Animal
{
    public $speed;
    function info()
    {
        echo '<span class="color">Speed: </span>' . $this->speed . '<br>' . '<span class="color">Weight: </span>' . $this->weight . '<br>' . '<span class="color">Color: </span>' . $this->color . '<br>' . '<span class="color">Age: </span>' . $this->age;
    }
}


class Rabbit extends Animal
{
    public $types;
    function info()
    {
        echo '<span class="color">Type: </span>' . $this->types . '<br>' . '<span class="color">Weight: </span>' . $this->weight . '<br>' . '<span class="color">Color: </span>' . $this->color . '<br>' . '<span class="color">Age: </span>' . $this->age;
    }
}

class Wolf extends Animal
{
    public $habitat;
    function info()
    {
        echo '<span class="color">Habitat: </span>' . $this->habitat . '<br>' . '<span class="color">Weight: </span>' . $this->weight . '<br>' . '<span class="color">Color: </span>' . $this->color . '<br>' . '<span class="color">Age: </span>' . $this->age;
    }
}
$lion = new Lion();
$lion->weight = '100';
$lion->color = 'yellow';
$lion->age = '6';
$lion->speed = '200';


$rabbit = new Rabbit();
$rabbit->weight = '10';
$rabbit->color = 'white';
$rabbit->age = '3';
$rabbit->types = 'lepus';


$wolf = new Wolf();
$wolf->weight = '80';
$wolf->color = 'gray';
$wolf->age = '2';
$wolf->habitat = 'wol';

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
        <h2 class="title">Info:</h2>
        <div class="info">

            <div class="info_animal">
                <p class="text">
                    <?
                    $lion->info();
                    ?>
                </p>
            </div>
            <div class="info_animal">
                <p class="text">
                    <?
                    $rabbit->info();
                    ?>
                </p>
            </div>
            <div class="info_animal">
                <p class="text">
                    <?
                    $wolf->info();
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>