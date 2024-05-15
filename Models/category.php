<?php
class Category extends Product {
    private $animal;
    private $type;

    public function __construct($name, $price, $image, $animal, $type) {
        parent::__construct($name, $price, $image);
        $this->animal = $animal;
        $this->type = $type;

    }

    public function getanimal() {
        return $this->animal;
    }

    public function getType() {
        return $this->type;
    }
}
?>