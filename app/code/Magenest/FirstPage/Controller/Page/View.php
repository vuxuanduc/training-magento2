<?php
namespace Magenest\FirstPage\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class View extends Action
{
    public function execute()
    {
        // Create a result page instance
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        // Optionally, set the page title or other properties
        $resultPage->getConfig()->getTitle()->prepend(__('Model Test Page'));

        $block = $resultPage->getLayout()->getBlock('magenset_firstpage_page_view');
        if ($block) {
            $block->setData('key', 'valueueuue');
        }

        return $resultPage;
    }
}
