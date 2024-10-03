<?php

namespace Magenest\Event\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class CustomerSaveBefore implements ObserverInterface {

    public function execute(Observer $observer)
    {
        $custom = $observer->getEvent()->getCustomer();

        $currentFirstName = $custom->getFirstname();

        if(substr($currentFirstName, 0, 9) == 'Magenest_') {
            $newFirstName = $currentFirstName;
        }else {
            $newFirstName = 'Magenest_' . $currentFirstName;
        }

        $custom->setFirstname($newFirstName);
    }
}
