<?php

namespace Magenest\EavTest\Controller\Adminhtml\Blog;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magenest\EavTest\Model\BlogFactory;

class Edit extends Action
{
    protected $resultPageFactory;
    protected $blogFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        BlogFactory $blogFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->blogFactory = $blogFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $id = $this->getRequest()->getParam('blog_id');
        $model = $this->blogFactory->create();

        if ($id) {
            $model->load($id);
            if (!$model->getId()) {
                $this->messageManager->addErrorMessage(__('This blog no longer exists.'));
                return $this->_redirect('blogs/blog/index');
            }
        }


        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(
            $model->getId() ? __('Edit blog: %1', $model->getTitle()) : __('New Blog')
        );

        return $resultPage;
    }
}
