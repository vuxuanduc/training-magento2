<?php

namespace Magenest\HelloWorld\Controller\Adminhtml\Post;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magenest\HelloWorld\Model\PostFactory;

class Update extends Action
{
    protected $postFactory;

    public function __construct(
        Context $context,
        PostFactory $postFactory
    ) {
        $this->postFactory = $postFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);

        if (!$data) {
            $this->messageManager->addErrorMessage(__('No data found to save.'));
            return $resultRedirect->setPath('magenest_helloworld/post/index');
        }

        try {
            $model = $this->postFactory->create();

            // Load the model if `post_id` exists in the data
            if (isset($data['post_id']) && $data['post_id']) {
                $model->load($data['post_id']);
                if (!$model->getId()) {
                    $this->messageManager->addErrorMessage(__('Post with id %1 does not exist.', $data['post_id']));
                    return $resultRedirect->setPath('magenest_helloworld/post/index');
                }
            }

            // Set data and save
            $model->setData($data);
            $model->save();

            $this->messageManager->addSuccessMessage(__('Data has updated successfully.'));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('Something went wrong while saving the data: %1', $e->getMessage()));
        }

        return $resultRedirect->setPath('magenest_helloworld/post/index');
    }
}
