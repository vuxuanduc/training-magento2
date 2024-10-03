<?php
namespace Magenest\Movie\Block\Adminhtml\Report;

use Magento\Customer\Model\ResourceModel\Customer\CollectionFactory as CustomerCollectionFactory;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory as ProductCollectionFactory;
use Magento\Sales\Model\ResourceModel\Order\CollectionFactory as OrderCollectionFactory;
use Magento\Sales\Model\ResourceModel\Order\CollectionFactory as InvoiceCollectionFactory;
use Magento\Sales\Model\ResourceModel\Order\CollectionFactory as CreditmemoCollectionFactory;

class Second extends \Magento\Framework\View\Element\Template
{

    protected $customerCollectionFactory;
    protected $productCollectionFactory;
    protected $orderCollectionFactory;
    protected $invoiceCollectionFactory;
    protected $creditmemoCollectionFactory;


    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        CustomerCollectionFactory $customerCollectionFactory,
        ProductCollectionFactory $productCollectionFactory,
        OrderCollectionFactory $orderCollectionFactory,
        InvoiceCollectionFactory $invoiceCollectionFactory,
        CreditmemoCollectionFactory $creditmemoCollectionFactory
    ) {
        $this->customerCollectionFactory = $customerCollectionFactory;
        $this->productCollectionFactory = $productCollectionFactory;
        $this->orderCollectionFactory = $orderCollectionFactory;
        $this->invoiceCollectionFactory = $invoiceCollectionFactory;
        $this->creditmemoCollectionFactory = $creditmemoCollectionFactory;
        parent::__construct($context);
    }


    public function getCustomerCount()
    {
        $customerCollection = $this->customerCollectionFactory->create();
        return $customerCollection->getSize();
    }

    public function getProductCount(){
        $productCollection = $this->productCollectionFactory->create();
        return $productCollection->getSize();
    }

    public function getOrderCount() {
        $orderCollection = $this->orderCollectionFactory->create();
        return $orderCollection->getSize();
    }

    public function getInvoiceCount(){
        $invoiceCollection = $this->invoiceCollectionFactory->create();
        return $invoiceCollection->getSize();
    }

    public function getCreditmemoCount(){
        $creditmemoCollection = $this->creditmemoCollectionFactory->create();
        return $creditmemoCollection->getSize();
    }

}
