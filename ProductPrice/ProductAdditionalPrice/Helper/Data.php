<?php
namespace ProductPrice\ProductAdditionalPrice\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper {
    public $scopeConfig;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * get product additional price.
     * @return type
     */
    public function getAdditionalPrice() {
        return $this->scopeConfig->getValue('catalog/product_price/product_additional_price');
    }
}
