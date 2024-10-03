<?php

namespace Magenest\EavTest\Model\Source;

use Magento\Framework\Data\OptionSourceInterface;
use Magento\User\Model\ResourceModel\User\CollectionFactory;
class UserOption implements OptionSourceInterface
{
    protected $userFactory;


    public function __construct(CollectionFactory $userFactory)
    {
        $this->userFactory = $userFactory;
    }

    /**
     * Return options array.
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options = [];
        $collection = $this->userFactory->create();

        foreach ($collection as $user) {
            $options[] = [
                'value' => $user->getId(),
                'label' => $user->getName()
            ];
        }

        return $options;
    }
}
