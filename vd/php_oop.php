<html>
    <body>
    <?php
    class Car{
        public $name;
        public $price;

        function __contract($name, $price){
            $this->name = $name;
            $his->price = $price;
        }
        function get_name(){
            return $this->name;
        }
        function __get_price(){
            return $this->price;
        }
    }
    $bmv = new Car("X7","$500000");
    echo $bmv->get_name();
    echo "<br>";
    echo $bmw->get_price();
?>                                                                                                                                                                                                                                                                                                                                                      
    </body>
</html>