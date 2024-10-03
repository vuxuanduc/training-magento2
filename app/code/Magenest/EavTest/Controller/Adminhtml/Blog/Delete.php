<?php

namespace Magenest\EavTest\Controller\Adminhtml\Blog;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magenest\EavTest\Model\BlogFactory;
use Magento\Framework\Controller\Result\Redirect;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\LocalizedException;

class Delete extends Action
{
    /**
     * @var BlogFactory
     */
    protected $postFactory;

    /**
     * @param Context $context
     * @param BlogFactory $blogFactory
     */
    public function __construct(
        Context $context,
        BlogFactory $blogFactory
    ) {
        $this->blogFactory = $blogFactory;
        parent::__construct($context);
    }

    /**
     * Execute action based on request and return result
     *
     * @return ResultInterface|Redirect
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('id');

        /** @var \Magenest\EavTest\Model\Blog $blog */
        $blog = $this->blogFactory->create()->load($id);
        if (!$blog->getId()) {
            $this->messageManager->addErrorMessage(__('This blog no longer exists.'));
            return $this->resultRedirectFactory->create()->setPath('blogs/blog/index');
        }

        try {
            $blog->delete();
            $this->messageManager->addSuccessMessage(__('The blog has been deleted.'));
        } catch (LocalizedException $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('An error occurred while deleting the blog.'));
        }

        return $this->resultRedirectFactory->create()->setPath('blogs/blog/index');
    }

    /**
     * Check if the user has permission to access this controller
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Magenest_HelloWorld::delete');
    }
}
