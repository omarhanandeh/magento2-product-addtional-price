<?php

namespace ProductPrice\ProductAdditionalPrice\Plugin;
use ProductPrice\ProductAdditionalPrice\Helper\Data;
class Product {

    public $helperData;

    public function __construct(Data $helper) {
        $this->helperData = $helper;
    }
    
    
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result) {
        $additionalPrice = $this->helperData->getAdditionalPrice();
        return $result + $additionalPrice;
    }
}
