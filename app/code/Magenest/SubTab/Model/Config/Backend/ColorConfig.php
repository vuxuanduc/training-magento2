<?php

namespace Magenest\SubTab\Model\Config\Backend;

use Magento\Framework\App\Config\Value;

class ColorConfig extends Value
{

    public function beforeSave()
    {
        $value = $this->getValue();

        if (is_array($value)) {
            $cleanedValues = [];
            foreach ($value as $colorData) {
                if (isset($colorData['color_code']) && !empty($colorData['color_code'])) {
                    $cleanedValues[] = $colorData;
                }
            }
            $this->setValue(json_encode($cleanedValues));
        }

        return parent::beforeSave();
    }
}
