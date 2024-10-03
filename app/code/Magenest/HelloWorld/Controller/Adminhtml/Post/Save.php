<?php

namespace Magenest\HelloWorld\Controller\Adminhtml\Post;

use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magenest\HelloWorld\Observer\CustomStatus;

class Save extends \Magento\Backend\App\Action
{
    protected $post;

    public function __construct(
        Context $context,
        \Magenest\HelloWorld\Model\Post $post
    ) {
        $this->post = $post;
        parent::__construct($context);
    }

    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        if ($data) {
            try {
                $model = $this->post;
                $model->setData($data);
                $this->_eventManager->dispatch('custom_status', ['post' =>  $model]);
                $model->save();

                $this->messageManager->addSuccessMessage(__('Data has created successfully.'));
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage(__('Something went wrong while saving the data.'));
            }
        }
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        return $resultRedirect->setPath('magenest_helloworld/post/index');
    }
}
