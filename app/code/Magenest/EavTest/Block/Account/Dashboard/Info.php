<?php

namespace Magenest\EavTest\Block\Account\Dashboard;

use Magento\Customer\Helper\Session\CurrentCustomer;
use Magento\Framework\View\Element\Template;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Customer\Helper\View;

use Magento\Framework\UrlInterface;


class Info extends Template
{

    protected $currentCustomer;
    protected $helperView;
    protected $storeManager;

    public function __construct(
        Template\Context $context,
        CurrentCustomer $currentCustomer,
        View $helperView,
        StoreManagerInterface $storeManager,
        array $data = []
    )
    {
        $this->currentCustomer = $currentCustomer;
        $this->helperView = $helperView;
        $this->storeManager = $storeManager;
        parent::__construct($context, $data);
    }

    public function getCustomer()
    {
        try {
            return $this->currentCustomer->getCustomer();
        } catch (NoSuchEntityException $e) {
            return null;
        }
    }

    public function getName()
    {
        return $this->helperView->getCustomerName($this->getCustomer());
    }

    public function getUrlMedia()
    {
        return $this->storeManager->getStore()->getBaseUrl(
            \Magento\Framework\UrlInterface::URL_TYPE_MEDIA
        );
    }
}
