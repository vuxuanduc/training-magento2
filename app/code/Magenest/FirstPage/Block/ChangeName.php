<?php

namespace Magenest\FirstPage\Block;

use Magento\CatalogInventory\Api\StockRegistryInterface;
use Magento\Framework\View\Element\Template;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use Magento\Catalog\Model\Product;

class ChangeName extends Template {

    protected $registry;
    protected $stockRegistry;
    protected $productCollection;
    protected $product;

    public function __construct(
        Template\Context $context,
        \Magento\Framework\Registry $registry,
        StockRegistryInterface $stockRegistry,
        CollectionFactory $productCollection,
        Product $product,
        array $data = []
    )
    {
        $this->registry = $registry;
        $this->stockRegistry = $stockRegistry;
        $this->productCollection = $productCollection;
        $this->product = $product;
        parent::__construct($context, $data);
    }



    public function changeName() {
        return $this->getQuantity();
    }

    public function getQuantity() {
        $model = $this->productCollection->create();
        $productId = $this->product->load(44);
        $qty = $productId->getQty();
        $quantity = $model->getSize();
        return $qty .'-'. $quantity;
    }
}
