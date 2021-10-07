<?php
    class Car{
        public $name;
        public $price;
        public $color;

        function set_name($pname){
            $this->name = $pname;
        }
        protected function set_color($pcolor){//ben trong 1 class lop con goi lop cha van thuc thi duoc
            $this->color = $pcolor;
        }
        private function set_price($pprice){//chi duy nhat la trong lpo nay moi duoc goi
            $this->price = $pprice;
        }
    }

    $vinfast = new Car();
    $vinfast->set_name("SA");
    $vinfast->set_color("black");
    //$vinfast->set_price("$30000");
?>
