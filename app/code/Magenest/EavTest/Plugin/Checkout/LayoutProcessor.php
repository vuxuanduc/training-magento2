<?php
namespace Magenest\EavTest\Plugin\Checkout;

class LayoutProcessor
{
    /**
     * @param \Magento\Checkout\Block\Checkout\LayoutProcessor $subject
     * @param array $jsLayout
     * @return array
     */
    public function afterProcess(
        \Magento\Checkout\Block\Checkout\LayoutProcessor $subject,
        array  $jsLayout
    ) {

        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
        ['shippingAddress']['children']['shipping-address-fieldset']['children']['vn_region'] = [
            'component' => 'Magento_Ui/js/form/element/select',
            'config' => [
                'customScope' => 'shippingAddress.custom_attributes',
                'template' => 'ui/form/field',
                'elementTmpl' => 'ui/form/element/select',
                'options' => [
                    [
                        'value' => '1',
                        'label' => 'Miền Bắc'
                    ],
                    [
                        'value' => '2',
                        'label' => 'Miền Trung'
                    ],
                    [
                        'value' => '3',
                        'label' => 'Miền Nam'
                    ]

                ],
                'id' => 'vn-region'
            ],
            'dataScope' => 'shippingAddress.custom_attributes.vn_region',
            'label' => 'VN Region',
            'provider' => 'checkoutProvider',
            'visible' => true,
            'validation' => [],
            'sortOrder' => 5,
            'id' => 'vn-region'
        ];
        $configuration = $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']['payment']['children']['payments-list']['children'];
        foreach ($configuration as $paymentGroup => $groupConfig) {
            if (isset($groupConfig['component']) AND $groupConfig['component'] === 'Magento_Checkout/js/view/billing-address') {

                $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
                ['payment']['children']['payments-list']['children'][$paymentGroup]['children']['form-fields']['children']['company_tax_id'] = [
                    'component' => 'Magento_Ui/js/form/element/select',
                    'config' => [
                        'customScope' => 'shippingAddress.custom_attributes',
                        'template' => 'ui/form/field',
                        'elementTmpl' => 'ui/form/element/select',
                        'options' => [
                            [
                                'value' => '1',
                                'label' => 'Miền Bắc'
                            ],
                            [
                                'value' => '2',
                                'label' => 'Miền Trung'
                            ],
                            [
                                'value' => '3',
                                'label' => 'Miền Nam'
                            ]
                        ],
                        'id' => 'vn-region'
                    ],
                    'dataScope' => 'shippingAddress.custom_attributes.vn_region',
                    'label' => 'VN Region',
                    'provider' => 'checkoutProvider',
                    'visible' => true,
                    'validation' => [],
                    'sortOrder' => 1,
                    'id' => 'vn-region'
                ];
            }
        }

        return $jsLayout;


    }
}
