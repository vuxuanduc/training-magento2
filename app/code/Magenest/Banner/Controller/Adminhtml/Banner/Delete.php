<?php

namespace Magenest\Banner\Controller\Adminhtml\Banner;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magenest\Banner\Model\BannerFactory;
use Magento\Framework\Controller\Result\Redirect;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\LocalizedException;

class Delete extends Action
{
    /**
     * @var BannerFactory
     */
    protected $bannerFactory;

    /**
     * @param Context $context
     * @param BannerFactory $bannerFactory
     */
    public function __construct(
        Context $context,
        BannerFactory $bannerFactory
    ) {
        $this->bannerFactory = $bannerFactory;
        parent::__construct($context);
    }

    /**
     * Execute action based on request and return result
     *
     * @return ResultInterface|Redirect
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('banner_id');

        /** @var \Magenest\Banner\Model\Banner $banner */
        $banner = $this->bannerFactory->create()->load($id);
        if (!$banner->getId()) {
            $this->messageManager->addErrorMessage(__('This banner no longer exists.'));
            return $this->resultRedirectFactory->create()->setPath('banners/banner/index');
        }

        try {
            $banner->delete();
            $this->messageManager->addSuccessMessage(__('The banner has been deleted.'));
        } catch (LocalizedException $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('An error occurred while deleting the banner.'));
        }

        return $this->resultRedirectFactory->create()->setPath('banners/banner/index');
    }

    /**
     * Check if the user has permission to access this controller
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Magenest_Banner::delete');
    }
}
