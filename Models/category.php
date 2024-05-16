<?php
require_once __DIR__ . '/../Traits/type.php';
class Category extends Product {
    private $animal;
    use Type;

    public function __construct($name, $price, $image, $animal) {
        parent::__construct($name, $price, $image);
        $this->animal = $animal;

    }

    public function getanimal() {
        return $this->animal;
    }

}
?>