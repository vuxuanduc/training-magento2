<?php

namespace Magenest\Movie\Ui\DataProvider\Product\Form\Modifier;

use Magento\Catalog\Ui\DataProvider\Product\Form\Modifier\AbstractModifier;
use Magento\Framework\View\LayoutFactory;
use Magenest\Movie\Block\Adminhtml\Catalog\Product\Edit\Tab\Demo;

class CustomOption extends AbstractModifier
{

    protected $layoutFactory;

    public function __construct(
        LayoutFactory $layoutFactory
    ) {
        $this->layoutFactory = $layoutFactory;
    }

    /**
     * Modify data
     *
     * @param array $data
     * @return array
     */
    public function modifyData(array $data)
    {
        return $data;
    }

    /**
     * Modify meta data
     *
     * @param array $meta
     * @return array
     */
    public function modifyMeta(array $meta)
    {
        $meta['demo_tab'] = [
            "children" => [
                "demo_tab_container" => [
                    "arguments" => [
                        "data" => [
                            "config" => [
                                "formElement" => "container",
                                "componentType" => "container",
                                'component' => 'Magento_Ui/js/form/components/html',
                                "required" => 0,
                                "sortOrder" => 5,
                                "content" => $this->layoutFactory->create()->createBlock(
                                    Demo::class
                                )->toHtml(),
                            ]
                        ]
                    ]
                ]
            ],
            "arguments" => [
                "data" => [
                    "config" => [
                        "componentType" => "fieldset",
                        "label" => __("Demo Tab"),
                        "collapsible" => true,
                        'dataScope' => 'data.product',
                        "sortOrder" => 5,
                        'opened' => true,
                        'canShow' => true
                    ]
                ]
            ]
        ];
        return $meta;
    }
}
