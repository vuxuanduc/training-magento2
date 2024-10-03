<?php

namespace Magenest\Movie\Model;

use Magenest\Movie\Model\ResourceModel\Docs\CollectionFactory;

use Magento\Ui\DataProvider\AbstractDataProvider;

class DocsDataProvider extends AbstractDataProvider
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
        foreach ($items as $docs) {
            $this->loadedData[$docs->getId()] = $docs->getData();
        }

        return $this->loadedData;
    }
}
