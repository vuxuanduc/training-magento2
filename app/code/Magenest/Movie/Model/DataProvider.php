<?php

namespace Magenest\Movie\Model;

use Magenest\Movie\Model\ResourceModel\Movie\CollectionFactory;

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
        foreach ($items as $movie) {
            $this->loadedData[$movie->getId()] = $movie->getData();
        }

        return $this->loadedData;
    }
}
