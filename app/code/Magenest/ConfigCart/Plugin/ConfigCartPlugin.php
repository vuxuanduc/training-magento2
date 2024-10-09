<?php
namespace Magenest\ConfigCart\Plugin;

use Magento\Catalog\Model\Product;

class ConfigCartPlugin
{
    /**
     *
     * @param \Magento\Checkout\Model\Cart $subject
     * @param \Magento\Catalog\Model\Product $productInfo
     * @param array|null $requestInfo
     * @return array
     */
    public function beforeAddProduct(
        \Magento\Checkout\Model\Cart $subject,
        $productInfo,
        $requestInfo = null
    ) {
        if ($productInfo instanceof Product) {
            if ($productInfo->getTypeId() == \Magento\ConfigurableProduct\Model\Product\Type\Configurable::TYPE_CODE) {
                $attributes = $requestInfo['super_attribute'] ?? [];
                $childProduct = $productInfo->getTypeInstance()->getProductByAttributes($attributes, $productInfo);

                if ($childProduct) {
                    $childProduct->setName($this->getModifiedName($childProduct));
                    $childProduct->setImage($this->getModifiedImage($childProduct));
                    $productInfo = $childProduct;
                }
            }
        }

        return [$productInfo, $requestInfo];
    }

    /**
     * Thay đổi tên sản phẩm.
     *
     * @param \Magento\Catalog\Model\Product $product
     * @return string
     */
    private function getModifiedName($product)
    {
        return $product->getName();
    }

    /**
     * Thay đổi hình ảnh sản phẩm.
     *
     * @param \Magento\Catalog\Model\Product $product
     * @return string
     */
    private function getModifiedImage($product)
    {
        return $product->getImage();
    }
}

