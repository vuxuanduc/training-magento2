<?php

namespace Magenest\Banner\Controller\Adminhtml\Banner;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magenest\Banner\Model\ResourceModel\BannerFactory;
use Magenest\Banner\Model\BannerFactory as ModelBannerFactory;
use Magento\Framework\Event\ManagerInterface;

class Update extends Action
{
    protected $bannerFactory;

    protected $eventManager;

    protected $modelBannerFactory;

    public function __construct(
        Context $context,
        BannerFactory $bannerFactory,
        ManagerInterface $eventManager,
        ModelBannerFactory $modelBannerFactory
    ) {
        $this->bannerFactory = $bannerFactory;
        $this->eventManager = $eventManager;
        $this->modelBannerFactory = $modelBannerFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
//        $this->eventManager->dispatch('custom_event_banner', $data);
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);

        if (!$data) {
            $this->messageManager->addErrorMessage(__('No data found to save.'));
            return $resultRedirect->setPath('banners/banner/index');
        }

        try {
            $model = $this->bannerFactory->create();
            $modelBanner = $this->modelBannerFactory->create();


            if (isset($data['banner_id']) && $data['banner_id']) {
//                $model->load($modelBanner, $data['banner_id'], 'banner_id');
                $modelBanner->load($data['banner_id']);
                if (!$modelBanner->getId()) {
                    $this->messageManager->addErrorMessage(__('Banner with id %1 does not exist.', $data['banner_id']));
                    return $resultRedirect->setPath('banners/banner/index');
                }
            }

            // Set data and save
            $modelBanner->setData($data);
            $modelBanner->save();

            $this->messageManager->addSuccessMessage(__('Data has updated successfully.'));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('Something went wrong while saving the data: %1', $e->getMessage()));
        }

        return $resultRedirect->setPath('banners/banner/index');
    }
}
