<?php session_start();  ?>
<?php

class Truck {
    public function delivery() {
        echo "deliver";
    }

}






spl_autoload_register(function($class) {
 require_once $_SERVER['DOCUMENT_ROOT'].'/ite601/classes/' . $class . '.php';
});

$truck = new Truck();
