<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>практика 3</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="pr2">

        <?
        class Animal
        {
            public $weight;
            public $age;
            public $color;

            public function __construct($weight, $age, $color)
            {
                $this->weight = $weight;
                $this->age = $age;
                $this->color = $color;
            }

            public function getInfo()
            {
                return "<p class='pr2p'> Вес: </p> {$this->weight}  кг, <p> Возраст: </p> {$this->age}  лет, <p> Окрас: </p> {$this->color}";
            }
        }

        class Lion extends Animal
        {
            public $maneLength;

            public function __construct($weight, $age, $color, $maneLength)
            {
                parent::__construct($weight, $age, $color);
                $this->maneLength = $maneLength;
            }

            public function roar()
            {
                return "<p style='color:red;'> Лев рычит с громким ревом! </p>";
            }

            public function getInfo()
            {
                return parent::getInfo() . ", <p> Длина гривы: </p> {$this->maneLength}  см";
            }
        }

        class Rabbit extends Animal
        {
            public $earLength;

            public function __construct($weight, $age, $color, $earLength)
            {
                parent::__construct($weight, $age, $color);
                $this->earLength = $earLength;
            }

            public function hop()
            {
                return " <p style='color:red;'> Кролик прыгает! </p> ";
            }

            public function getInfo()
            {
                return parent::getInfo() . ", <p> Длина ушей: </p> {$this->earLength} см";
            }
        }

        class Wolf extends Animal
        {
            public $packSize;

            public function __construct($weight, $age, $color, $packSize)
            {
                parent::__construct($weight, $age, $color);
                $this->packSize = $packSize;
            }

            public function howl()
            {
                return " <p style='color:red;'> Волк воет на луну! </p>";
            }

            public function getInfo()
            {
                return parent::getInfo() . ", <p> Размер стаи: </p> {$this->packSize}";
            }
        }

        $lion = new Lion(190, 5, 'Золотистый', 30);
        $rabbit = new Rabbit(2, 1, 'Белый', 12);
        $wolf = new Wolf(50, 4, 'Серый', 8);

        echo $lion->getInfo() . PHP_EOL;
        echo $lion->roar() . PHP_EOL;

        echo $rabbit->getInfo() . PHP_EOL;
        echo $rabbit->hop() . PHP_EOL;

        echo $wolf->getInfo() . PHP_EOL;
        echo $wolf->howl() . PHP_EOL;

        ?>
    </div>


</body>

</html>