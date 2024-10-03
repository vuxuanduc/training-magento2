<?php

namespace Magenest\SubTab\Block\Adminhtml\System\Config;

use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\UrlInterface;

class Button extends Field
{
    protected $_template = 'Magenest_SubTab::system/config/button.phtml';

    protected $urlBuilder;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        UrlInterface $urlBuilder,
        array $data = []
    ) {
        $this->urlBuilder = $urlBuilder;
        parent::__construct($context, $data);
    }

    protected function _getElementHtml(AbstractElement $element)
    {
        $this->addData([
            'button_label' => __('Submit'),
            'button_url' => $this->getButtonUrl(),
        ]);

        return $this->_toHtml();
    }

    public function getButtonUrl()
    {
        return $this->urlBuilder->getUrl('your_controller_path/action');
    }
}
