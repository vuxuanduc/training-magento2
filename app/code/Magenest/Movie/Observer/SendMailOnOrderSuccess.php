<?php

namespace Magenest\Movie\Observer;

use Magento\Framework\Event\ObserverInterface;

use Magenest\Movie\Model\ResourceModel\Docs\CollectionFactory;
use Magenest\Movie\Helper\SendMailDocs;

class SendMailOnOrderSuccess implements ObserverInterface
{
    /**
     * @var \Magento\Sales\Model\OrderFactory
     */
    protected $orderModel;
    protected $collection;

    protected $sendMailDocs;

    /**
     * @var \Magento\Sales\Model\Order\Email\Sender\OrderSender
     */
    protected $orderSender;

    /**
     * @var \Magento\Checkout\Model\Session $checkoutSession
     */
    protected $checkoutSession;

    /**
     * @param \Magento\Sales\Model\OrderFactory $orderModel
     * @param \Magento\Sales\Model\Order\Email\Sender\OrderSender $orderSender
     * @param \Magento\Checkout\Model\Session $checkoutSession
     *
     * @codeCoverageIgnore
     */
    public function __construct(
        \Magento\Sales\Model\OrderFactory $orderModel,
        \Magento\Sales\Model\Order\Email\Sender\OrderSender $orderSender,
        \Magento\Checkout\Model\Session $checkoutSession,
        CollectionFactory $collection,
        SendMailDocs $sendMailDocs

    )
    {
        $this->orderModel = $orderModel;
        $this->orderSender = $orderSender;
        $this->checkoutSession = $checkoutSession;
        $this->collection = $collection;
        $this->sendMailDocs = $sendMailDocs;
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $items = $observer->getOrder()->getAllVisibleItems();
        $order = $observer->getOrder();
//        $orderIds = $observer->getEvent()->getOrderIds();

        foreach ($items as $item) {
            $productId = $item->getProductId();
            $docs = $this->collection->create()->addFieldToFilter('product_id', $productId)->getItems();

            foreach ($docs as $docsItem) {
                $docsItem->getData('url');
                $this->sendMailDocs->sendEmail($docsItem, $order);
//                $this->orderSender->send($docsItem, true);
            }

        }
    }
}
