<?php

namespace Magenest\Banner\Controller\Adminhtml\Banner;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magenest\Banner\Model\ResourceModel\BannerFactory;
use Magenest\Banner\Model\BannerFactory as ModelFactory;
class Edit extends Action
{
    protected $resultPageFactory;
    protected $bannerFactory;

    protected $modelFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        BannerFactory $bannerFactory,
        ModelFactory $modelFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->bannerFactory = $bannerFactory;
        $this->modelFactory = $modelFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $id = $this->getRequest()->getParam('banner_id');
        $model = $this->bannerFactory->create();
        $banner = $this->modelFactory->create();

        if ($id) {
            $model->load($banner, $id, 'banner_id');
            if (!$banner->getData()) {
                $this->messageManager->addErrorMessage(__('This post no longer exists.'));
                return $this->_redirect('banners/banner/index');
            }
        }

        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(
            __('Edit Banner: %1', $banner->getTitle())
        );

        return $resultPage;
    }
}
