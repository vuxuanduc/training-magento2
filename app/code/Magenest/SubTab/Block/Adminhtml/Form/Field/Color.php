<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magenest\SubTab\Block\Adminhtml\Form\Field;

use Magenest\SubTab\Block\Adminhtml\Edit\Tab\ColorRenderer;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\View\Helper\SecureHtmlRenderer;


class Color extends \Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray
{

    protected $colorRenderer;

    public function __construct(Context $context, ColorRenderer $colorRenderer, ?SecureHtmlRenderer $secureRenderer = null, array $data = [])
    {
        $this->colorRenderer = $colorRenderer;
        parent::__construct($context, $data, $secureRenderer);
    }

    protected function _prepareToRender()
    {
        $this->addColumn(
            'color',
            [
                'label' => __('Color'),
                'id' => 'input-color',
                'class' => 'input-color',
                'index' => 'color',
            ]
        );



        $this->addColumn(
            'color_code',
        [
        'label' => __('Color code'),
        'renderer' => $this->getColorRenderer(),
        ]);
        $this->_addAfter = false;
        $this->_addButtonLabel = __('Add');
    }

    private function getColorRenderer()
    {
        if (!$this->colorRenderer) {
            $this->colorRenderer = $this->getLayout()->createBlock(
                \Magenest\SubTab\Block\Adminhtml\Edit\Tab\ColorRenderer::class,
                '',
                ['data' => ['is_render_to_js_template' => true]]
            );
        }
        return $this->colorRenderer;
    }


//    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
//    {
//        $html = parent::_getElementHtml($element);
//        $value = $element->getData('value');
//
//        foreach ($value as $key => $item) {
//
//                $script = '<script type="text/javascript">
//                    require(["jquery", "jquery/colorpicker/js/colorpicker"], function (jq) {
//                        jq(function(){
//                            function bindDatePicker() {
//                                setTimeout(function() {
//
//                                    var thisElement = jq("#" + "'. $key. '" + "_color_code");
//
//                                    thisElement.css("backgroundColor", "'. $item['color_code'] .'");
//                                    thisElement.ColorPicker({
//                                        color: "'. $item['color_code'] .'",
//                                        onChange: function (hsb, hex, rgb) {
//                                            thisElement.css("backgroundColor", "#" + hex).val("#" + hex);
//                                        }
//                                    });
//                                }, 50);
//                            }
//                            bindDatePicker();
//                            jq("button.action-add").on("click", function(e) {
//                                bindDatePicker();
//                            });
//                        });
//                    });
//                </script>';
//
//        }
//
//        $html .= $script;
//        return $html;
//    }
}
