<?php
namespace Magenest\SubTab\Block\Adminhtml\Form;

use Magento\Framework\View\Element\Template;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Select extends Template
{
    const COLOR_CONFIG_PATH = 'colorpicker/colorpickerSetting/color_option';

    protected $scopeConfig;

    public function __construct(
        Template\Context $context,
        ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

    /**
     * Get color options from configuration
     */
    public function getColorOptions()
    {
        $colorOptions = $this->scopeConfig->getValue(self::COLOR_CONFIG_PATH, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);

        if (!$colorOptions) {
            return [];
        }

        $colorOptions = json_decode($colorOptions, true);

        if (is_array($colorOptions)) {
            $processedOptions = [];

            foreach ($colorOptions as $key => $value) {
                if (isset($value['color']) && isset($value['color_code'])) {
                    $processedOptions[] = [
                        'color' => $value['color'],
                        'color_code' => $value['color_code']
                    ];
                }
            }

            return $processedOptions;
        }

        return [];
    }
}
