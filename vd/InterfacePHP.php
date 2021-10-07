<?php
    interface ParenInf
    {
        public function MyParentMethod();
    }
    interface DemoInterface extends ParenInf{
        public function myMethod();
    }
    class MyClassImp implements DemoInter
?>