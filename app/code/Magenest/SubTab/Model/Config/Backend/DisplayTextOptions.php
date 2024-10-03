<?php

namespace Magenest\SubTab\Model\Config\Backend;

use Magento\Framework\Data\OptionSourceInterface;

class DisplayTextOptions implements OptionSourceInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => '1', 'label' => __('Show')],
            ['value' => '2', 'label' => __('Not show')],
        ];
    }


}
