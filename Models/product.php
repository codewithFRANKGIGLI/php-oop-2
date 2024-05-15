<?php
class Product {
    public $image;
    public $title;
    private $price;
    private $category; // identifica se cane o gatto
    private $type; // identifica se è cibo, gioco o cuccia, etc

    public function __construct($image, $title, $price, $category, $type) {
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->type = $type;
    }


    public function getPrice() {
        return $this->price;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getType() {
        return $this->type;
    }


    public function setPrice($price) {
        $this->price = $price;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function setType($type) {
        $this->type = $type;
    }
}
?>