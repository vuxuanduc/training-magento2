<?php

namespace Magenest\Event\Plugin;

class Product
{
    public function afterGetName(\Magento\Catalog\Model\Product $product, $name)
    {
        $price = $product->getData('price');

        if ($price >= 60) {
            $name .= " Ok ok";
        } else {
            $name .= " Deo ok";
        }

        return $name;
    }
}
