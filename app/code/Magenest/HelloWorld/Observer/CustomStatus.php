<?php

namespace Magenest\HelloWorld\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Magenest\HelloWorld\Model\Post;
class CustomStatus implements ObserverInterface {

    public function execute(Observer $observer)
    {

            if(empty($observer->getPost()->getStatus())) {
                $observer->getPost()->setStatus(1);
            }
    }
}
