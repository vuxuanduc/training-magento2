<?php

namespace Magenest\Movie\Controller\Adminhtml\Movie;
use Magenest\Movie\Model\MovieFactory;

class Delete extends \Magento\Backend\App\Action {

    protected $movieFactory;

    public function __construct(
        MovieFactory $movieFactory,
        \Magento\Backend\App\Action\Context $context,
        array $data = []
    ) {
        $this->movieFactory = $movieFactory;
        parent::__construct($context, $data);
    }
    public function execute() {
        $id = $this->getRequest()->getParam('id');
        $model = $this->movieFactory->create();
        $model->load($id);
        if (!$model->getId()) {
            $this->messageManager->addError(__('This movie does not exist.'));
        }
        $model->delete();
        $this->messageManager->addSuccess(__('You deleted the movie.'));
        $this->_redirect('movies/movie/index');
    }
}
