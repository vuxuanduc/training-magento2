<?php

namespace Magenest\HelloWorld\Controller\Adminhtml\Post;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magenest\HelloWorld\Model\PostFactory;
//use Magento\Framework\Registry;

class Edit extends Action
{
    protected $resultPageFactory;
    protected $postFactory;
//    protected $_coreRegistry;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        PostFactory $postFactory
//        Registry $_coreRegistry
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->postFactory = $postFactory;
//        $this->_coreRegistry = $_coreRegistry;
        parent::__construct($context);
    }

    public function execute()
    {
        $id = $this->getRequest()->getParam('post_id');
        $model = $this->postFactory->create();

        if ($id) {
            $model->load($id);
            if (!$model->getId()) {
                $this->messageManager->addErrorMessage(__('This post no longer exists.'));
                return $this->_redirect('magenest_helloworld/post/index');
            }
        }

//        $this->_coreRegistry->register('magenest_helloworld_post', $model);

        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(
            $model->getId() ? __('Edit Post: %1', $model->getTitle()) : __('New Post')
        );

        return $resultPage;
    }
}
