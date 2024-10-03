<?php

namespace Magenest\Movie\Controller\Adminhtml\Movie;

use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magenest\HelloWorld\Observer\CustomStatus;

class Save extends \Magento\Backend\App\Action
{
    protected $movie;

    public function __construct(
        Context $context,
        \Magenest\Movie\Model\Movie $movie
    ) {
        $this->movie = $movie;
        parent::__construct($context);
    }

    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        $data['director_id'] = 2;
        if($data['rating'] <= 0) {
            $data['rating'] = 1;
        }
        if ($data) {
            try {
                $model = $this->movie;
                $model->setData($data);
                $model->save();

                $this->messageManager->addSuccessMessage(__('Data has created successfully.'));
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage(__('Something went wrong while saving the data.'));
            }
        }
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        return $resultRedirect->setPath('movies/movie/index');
    }
}
