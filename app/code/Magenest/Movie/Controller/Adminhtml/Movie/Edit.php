<?php

namespace Magenest\Movie\Controller\Adminhtml\Movie;
use Magenest\Movie\Model\MovieFactory;

class Edit extends \Magento\Backend\App\Action {

    protected $resultPageFactory;
    protected $movieFactory;

    public function __construct(
        MovieFactory $movieFactory,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Backend\App\Action\Context $context,
        array $data = []
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct(
            $context,
            $data
        );


    }
    public function execute()
    {
        $id = $this->getRequest()->getParam('movie_id');
        $resultPage = $this->resultPageFactory->create();
        $movie = $this->movieFactory->create();

       if($id) {
           $movie->load($id);
            if(!$movie->getId()) {
                $this->messageManager->addErrorMessage(__('This movie does not exist.'));
                $this->_redirect('movies/movie/index');
            }
       }

       $resultPage->getConfig()->getTitle()->prepend(__('Update Movie ' . $movie->getTitle()));
        return $resultPage;
    }


}
