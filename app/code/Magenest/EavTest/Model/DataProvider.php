<?php

namespace Magenest\EavTest\Model;

use Magenest\EavTest\Model\ResourceModel\Blog\CollectionFactory;

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

        foreach ($items as $blog) {
            $this->loadedData[$blog->getId()] = $blog->getData();
        }

        return $this->loadedData;
    }
}
