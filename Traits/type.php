<?php

// oggi continuate a lavorare nella stessa repo di ieri aggiungendo almeno un trait al vostro shop!
trait Type {
    protected $productType;

    public function getProductType() {
        return $this->productType;
    }
    public function setProductType($newProductType) {
        $this->productType = $newProductType;
    }
}

?>