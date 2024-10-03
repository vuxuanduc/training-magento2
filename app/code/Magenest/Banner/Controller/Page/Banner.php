<?php
namespace Magenest\Banner\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Banner extends Action
{
    public function execute()
    {
        // Create a result page instance
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        // Optionally, set the page title or other properties
        $resultPage->getConfig()->getTitle()->prepend(__('Test Page Banner'));

        $block = $resultPage->getLayout()->getBlock('magenset_banner_page_banner');

        return $resultPage;
    }
}
