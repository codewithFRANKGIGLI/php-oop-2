<?php
class ProductType extends Product {
    private $productTypeName;

    public function __construct($name, $price, $image, $productTypeName) {
        parent::__construct($name, $price, $image);
        $this->productTypeName = $productTypeName;
    }

    public function getProductTypeName() {
        return $this->productTypeName;
    }
}
?>