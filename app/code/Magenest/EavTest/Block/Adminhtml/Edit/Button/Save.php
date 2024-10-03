<?php

namespace Magenest\EavTest\Block\Adminhtml\Edit\Button;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;
use Magento\Ui\Component\Control\Container;

class Save implements ButtonProviderInterface
{
    public function getButtonData()
    {
        return [
            'label' => __('Save'),
            'class' => 'action-primary',
            'on_click' => '',
            'sort_order' => 50,
            'data_attribute' => [
                'mage-init' => [
                    'Magento_Ui/js/form/button-adapter' => [
                        'actions' => [
                            [
                                'targetName' => 'blogs_blog_creating.blogs_blog_creating',
                                'actionName' => 'save',
                                'params' => [
                                    false
                                ],
                            ],
                        ],
                    ],
                ],

            ],
        ];
    }

}
