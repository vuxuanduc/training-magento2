<?php
namespace Magenest\EavTest\Block\Popup;

use Magento\CatalogRule\Model\ResourceModel\Rule\CollectionFactory as RuleCollectionFactory;
use Magento\CatalogRule\Model\Rule;
use Magento\Framework\View\Element\Template;

class Popup extends Template
{
    protected $ruleCollectionFactory;

    public function __construct(
        Template\Context $context,
        RuleCollectionFactory $ruleCollectionFactory,
        array $data = []
    ) {
        $this->ruleCollectionFactory = $ruleCollectionFactory;
        parent::__construct($context, $data);
    }

    public function getDetailRule() {
        $ruleCollection = $this->ruleCollectionFactory->create();
        $rule = $ruleCollection->addFieldToFilter('is_active', 1)
            ->addFieldToFilter('rule_id', 2)->getFirstItem();
        return $rule;
    }

}
