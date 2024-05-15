<?php
class Category extends Product {
    private $categoryName;

    public function __construct($name, $price, $image, $categoryName) {
        parent::__construct($name, $price, $image);
        $this->categoryName = $categoryName;
    }

    public function getCategoryName() {
        return $this->categoryName;
    }
}
?>