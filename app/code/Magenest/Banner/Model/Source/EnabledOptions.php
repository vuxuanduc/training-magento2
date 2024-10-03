<?php

namespace Magenest\Banner\Model\Source;

use Magento\Framework\Data\OptionSourceInterface;

class EnabledOptions implements OptionSourceInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'On', 'label' => __('On')],
            ['value' => 'Off', 'label' => __('Off')],
        ];
    }


}
