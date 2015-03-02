<?php
    class Car
    {
        public $make_model;
        public $price;
        public $miles;


        function __construct($make_model, $price, $miles) {
            $this->make_model = $make_model;
            $this->price = $price;
            $this->miles = $miles;

        }

    }

    $porsche = new Car("2014 Porsche 911", 114989, 798989);
    $ford = new Car("2011 Ford F450", 12445, 98989);
    $lexus = new Car("2013 Lexus 350", 55584, 8888);
    $mercedes = new Car("Mercedes Benz CLS550", 390000, 37979);

    $cars = array($porsche, $ford, $lexus, $mercedes);

    $cars_matching_search = array();
        foreach($cars as $car) {
            if ($car->worth_buying(_$GET['price'])) {
                array_push($cars_matching_search, $car);
            }
        }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Car Dealership's Homepage</title>
</head>
<body>
    <h1>Your Car Dealership</h1>
    <ul>
        <?php
            foreach ($cars_matching_search as $car) {
                echo "<li> $car->make_model </li>";
                echo "<ul>";
                    echo "<li> $$car->price </li>";
                    echo "<li> Miles: $car->miles </li>";
                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>
