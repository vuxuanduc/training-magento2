<?php

namespace Magenest\Banner\Controller\Adminhtml\Banner;

use Magenest\Banner\Model\BannerFactory;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magenest\Banner\Model\ImageUploader;
use Magento\Framework\Message\ManagerInterface;
use Magento\Framework\App\Cache\Manager;

/**
 * Class Save
 * @package Vendorname\Helloworld\Controller\Adminhtml\Index
 */
class Save extends \Magento\Backend\App\Action
{

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    protected $imageUploaderModel;

    /**
     * @var BannerFactory
     */
    protected $bannerFactory;

    /**
     * @var ManagerInterface
     */
    protected $_messageManager;
    /**
     * @var TypeListInterface
     */
    protected $cacheManager;

    /**
     * Save constructor.
     * @param Context $context
     * @param PageFactory $resultPageFactory
     * @param BannerFactory $bannerFactory
     * @param ManagerInterface $messageManager
     * @param UrlRewriteFactory $urlRewriteFactory
     * @param StoreRepositoryInterface $storeRepository
     * @param CollectionFactory $collectionFactory
     * @param ImageUploader $imageUploaderModel
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        BannerFactory $bannerFactory,
        ImageUploader $imageUploaderModel,
        ManagerInterface $messageManager,
        Manager $cacheManager
    )
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->bannerFactory = $bannerFactory;
        $this->imageUploaderModel = $imageUploaderModel;
        $this->messageManager = $messageManager;
        $this->cacheManager = $cacheManager;
    }

    /**
     * @return mixed
     */
    public function execute()
    {
        try {
            $resultPageFactory = $this->resultRedirectFactory->create();
            $data = $this->getRequest()->getPostValue();
            $model = $this->bannerFactory->create();
            $model->setData($data);
            $model = $this->imageData($model, $data);
            $model->save();
            $this->messageManager->addSuccessMessage(__("Data Saved Successfully."));
            $buttonData = $this->getRequest()->getParam('back');
            if ($buttonData == 'edit' && $model->getId()) {
                return $resultPageFactory->setPath('banners/banner/form', ['id' => $model->getId()]);
            }
            if ($buttonData == 'new') {
                return $resultPageFactory->setPath('banners/banner/form');
            }
            if ($buttonData == 'close') {
                $this->_redirect('banners/banner/index');
            }
        } catch (\Exception $e) {
            $this->_messageManager->addErrorMessage(__($e));
        }
        return $resultPageFactory->setPath('banners/banner/index');
    }

    /**
     * @param $model
     * @param $data
     * @return mixed
     */
    public function imageData($model, $data)
    {
        if ($model->getId()) {
            $pageData = $this->helloworldFactory->create();
            $pageData->load($model->getId());
            if (isset($data['image'][0]['name'])) {
                $imageName1 = $pageData->getThumbnail();
                $imageName2 = $data['image'][0]['name'];
                if ($imageName1 != $imageName2) {
                    $imageUrl = $data['image'][0]['url'];
                    $imageName = $data['image'][0]['name'];
                    $data['image'] = $this->imageUploaderModel->saveMediaImage($imageName, $imageUrl);
                } else {
                    $data['image'] = $data['image'][0]['name'];
                }
            } else {
                $data['image'] = '';
            }
        } else {
            if (isset($data['image'][0]['name'])) {
                $imageUrl = $data['image'][0]['url'];
                $imageName = $data['image'][0]['name'];
                $data['image'] = $this->imageUploaderModel->saveMediaImage($imageName, $imageUrl);
            }
        }
        $model->setData($data);
        return $model;
    }
}
