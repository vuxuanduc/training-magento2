<?php

namespace Magenest\Movie\Model\Source;

use Magento\Framework\Data\OptionSourceInterface;
use Magenest\Movie\Model\ResourceModel\Director\CollectionFactory;

class DirectorOption implements OptionSourceInterface
{
    protected $collectionFactory;

    public function __construct(CollectionFactory $collectionFactory)
    {
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * Return options array.
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options = [];
        $collection = $this->collectionFactory->create();

        foreach ($collection as $director) {
            $options[] = [
                'value' => $director->getId(),
                'label' => $director->getName()
            ];
        }

        return $options;
    }
}
