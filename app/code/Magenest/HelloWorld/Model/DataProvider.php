<?php

namespace Magenest\HelloWorld\Model;

use Magenest\HelloWorld\Model\ResourceModel\Post\CollectionFactory;

use Magento\Ui\DataProvider\AbstractDataProvider;

class DataProvider extends AbstractDataProvider
{
    protected $loadedData;

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $collectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData()
    {

        $items = $this->collection->getItems();
        foreach ($items as $post) {
            $this->loadedData[$post->getId()] = $post->getData();
        }

        return $this->loadedData;
    }
}
