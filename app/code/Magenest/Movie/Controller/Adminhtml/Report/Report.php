<?php

namespace Magenest\Movie\Controller\Adminhtml\Report;

class Report extends \Magento\Backend\App\Action
{
    protected $resultPageFactory = false;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Magenest_Movie::request_dally_report');
        $resultPage->getConfig()->getTitle()->prepend((__('Request Report')));

        return $resultPage;
    }

}
