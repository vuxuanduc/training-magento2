<?php

namespace Magenest\EavTest\Model\Config\Source;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;
use Magento\Eav\Model\Entity\Attribute\Source\SourceInterface;
use Magento\Framework\Data\OptionSourceInterface;

class VnRegion extends AbstractSource implements OptionSourceInterface, SourceInterface
{
    public function getAllOptions(): array
    {
        return [
            [
                'value' => 1,
                'label' => 'Miền Bắc',
            ],
            [
                'value' => 2,
                'label' => 'Miền Trung',
            ],
            [
                'value' => 3,
                'label' => 'Miền Nam',
            ],
        ];
    }
}
