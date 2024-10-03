<?php

namespace Magenest\HelloWorld\Controller\Adminhtml\Post;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magenest\HelloWorld\Model\PostFactory;
use Magento\Framework\Controller\Result\Redirect;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\LocalizedException;

class Delete extends Action
{
    /**
     * @var PostFactory
     */
    protected $postFactory;

    /**
     * @param Context $context
     * @param PostFactory $postFactory
     */
    public function __construct(
        Context $context,
        PostFactory $postFactory
    ) {
        $this->postFactory = $postFactory;
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

        /** @var \Magenest\HelloWorld\Model\Post $post */
        $post = $this->postFactory->create()->load($id);
        if (!$post->getId()) {
            $this->messageManager->addErrorMessage(__('This post no longer exists.'));
            return $this->resultRedirectFactory->create()->setPath('magenest_helloworld/post/index');
        }

        try {
            $post->delete();
            $this->messageManager->addSuccessMessage(__('The post has been deleted.'));
        } catch (LocalizedException $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('An error occurred while deleting the post.'));
        }

        return $this->resultRedirectFactory->create()->setPath('magenest_helloworld/post/index');
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
