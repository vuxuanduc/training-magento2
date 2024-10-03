<?php

namespace Magenest\EavTest\Controller\Adminhtml\Blog;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magenest\EavTest\Model\BlogFactory;

class Update extends Action
{
    protected $blogFactory;

    public function __construct(
        Context $context,
        BlogFactory $blogFactory
    ) {
        $this->blogFactory = $blogFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);

        if (!$data) {
            $this->messageManager->addErrorMessage(__('No data found to save.'));
            return $resultRedirect->setPath('blogs/blog/index');
        }

        try {
            $model = $this->blogFactory->create();

            // Load the model if `post_id` exists in the data
            if (isset($data['blog_id']) && $data['blog_id']) {
                $model->load($data['blog_id']);
                if (!$model->getId()) {
                    $this->messageManager->addErrorMessage(__('Blog with id %1 does not exist.', $data['blog_id']));
                    return $resultRedirect->setPath('blogs/blog/index');
                }
            }

            // Set data and save
            $model->setData($data);
            $model->save();

            $this->messageManager->addSuccessMessage(__('Data has updated successfully.'));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('Something went wrong while saving the data: %1', $e->getMessage()));
        }

        return $resultRedirect->setPath('blogs/blog/index');
    }
}
