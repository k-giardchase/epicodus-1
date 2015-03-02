<?php
    class Car
    {
        private $make_model;
        private $price;
        private $miles;
        private $image_path;


        function __construct($make_model, $price, $miles, $image_path)
        {
            $this->make_model = $make_model;
            $this->price = $price;
            $this->miles = $miles;
            $this->image_path = $image_path;

        }

        function worthBuying($max_price)
        {
            return $this->price < ($max_price + 100);

        }

        function worthMileage($max_mileage)
        {
            return $this->miles < ($max_mileage + 100);
        }

        function setMakeModel()
        {
             $this->make_model;
        }

        function setPrice($new_price)
        {
            $float_price = (float) $new_price;
            if ($float_price != 0) {
                $formatted_price = number_format($float_price, 2);
                $this->price = $formatted_price;
            }
        }

        function setMiles()
        {
             $this->miles;
        }

        function setImage()
        {
            $this->image_path;
        }

        function getMakeModel()
        {
            return $this->make_model;
        }

        function getPrice()
        {
            return $this->price;

        }

        function getMiles()
        {
            return $this->miles;
        }

        function getImage()
        {
            return $this->image_path;
        }


    }

    $porsche = new Car("2014 Porsche 911", 114989, 798989, "<img src='porshe.jpg'>");
    $ford = new Car("2011 Ford F450", 12445, 98989, "<img src='ford.jpg'>");
    $lexus = new Car("2013 Lexus 350", 55584, 8888, "<img src='lexus.jpg'>");
    $mercedes = new Car("Mercedes Benz CLS550", 390000, 37979, "<img    src='mercedes.jpg'>");
    $mercedes->setPrice(9999999);
    $mercedes->setMiles(2);
    $mercedes->setMakeModel($lexus);

    $cars = array($porsche, $ford, $lexus, $mercedes);

    $cars_matching_search = array();
        foreach ($cars as $car) {
            if ($car->worthBuying($_GET['price']) &&    ($car->worthMileage($_GET['miles']))) {
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
            if (empty($cars_matching_search)) {
                    echo "There are no cars that meet your search criteria.";
                } else {
                    foreach ($cars_matching_search as $car) {
                        echo "It's your lucky day!";
                        echo "<li>" . $car->getMakeModel() . "</li>";
                        echo "<ul>";
                        echo "<li> $" . $car->getPrice() . "</li>";
                        echo "<li> Miles:" .  $car->getMiles() . "</li>";
                        echo "<li>" . $car->getImage() . "</li>";
                        echo "</ul>";
                    }
                }
        ?>
    </ul>
</body>
</html>
