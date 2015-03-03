<?php

    class Parcel
    {
        public $length;
        public $width;
        public $height;

        function __construct($length_param, $width, $height)
        {
            $this->length = $length_param;
            $this->width = $width;
            $this->height = $height;
        }


        function volume($length, $width, $height)
        {
            return $this->length * $this->width * $this->height;


        }

    }
        $my_parcel = new Parcel($_GET["length"], $_GET["width"], $_GET["height"]);


?>

<!DOCTYPE html>
<html>
    <body>
        <?php
        $your_volume = $my_parcel->volume($my_parcel->length, $my_parcel->width, $my_parcel->height);
        echo "<ul";
        echo "<li> " . $your_volume . "</li>";


        echo "</ul>";
        ?>
    </body>
</html>
