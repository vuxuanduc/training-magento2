<?php

namespace Magenest\EavTest\Controller\Adminhtml\Blog;

use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magenest\EavTest\Model\BlogFactory;


use Magenest\EavTest\Model\ResourceModel\Blog\CollectionFactory;
use function Magento\DataExporter\Model\Batch\create;
use function PHPUnit\Framework\throwException;

class Save extends \Magento\Backend\App\Action
{
    protected $collection;
    protected $blogFactory;

    public function __construct(
        Context $context,
        CollectionFactory $collection,
        BlogFactory $blogFactory
    ) {
        $this->collection = $collection;
        $this->blogFactory = $blogFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);

        if ($data) {

            try {
                $model = $this->collection->create();
                $blog = $this->blogFactory->create();
                $checkBlog = $model->addFieldToFilter('url_rewrite', $data['url_rewrite'])->getItems();
                if (!empty($checkBlog)) {
                    $this->messageManager->addErrorMessage(__('Url_rewrite has existed.'));
                    return $resultRedirect->setPath('blogs/blog/create');
                }
                $blog->setData($data);
                $blog->save();

                $this->messageManager->addSuccessMessage(__('Data has created successfully.'));
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage(__('Something went wrong while saving the data.'));
            }
        }
        return $resultRedirect->setPath('blogs/blog/index');
    }
}
