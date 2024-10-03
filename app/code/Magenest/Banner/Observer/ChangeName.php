<?php

namespace Magenest\Banner\Observer;

use Magento\Framework\Event\Observer ;
use Magento\Framework\Event\ObserverInterface;

class ChangeName implements ObserverInterface {

    public function execute(Observer $observer) {
        $title = $observer->getData('title');

        $modifiedTitle = 'Okokokokokokokok' . $title;

        $observer->setData('title', $modifiedTitle);
    }
}
