<?php
namespace Magenest\EavTest\Observer;

class CustomerAddressSaveObserver implements \Magento\Framework\Event\ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {

        $customerAddress = $observer->getCustomerAddress();
        $data = $customerAddress->getData();
    }
}
