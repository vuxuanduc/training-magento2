<?php

namespace Magenest\Banner\Controller\Adminhtml\Banner;

use Magento\Framework\Controller\ResultFactory;

class Uploader extends \Magento\Backend\App\Action
{
    public $imageUploader;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magenest\Banner\Model\ImageUploader $imageUploader
    ) {
        parent::__construct($context);
        $this->imageUploader = $imageUploader;
    }

    public function _isAllowed() {
        return $this->_authorization->isAllowed('Magenest_Banner::banner');
    }


    public function execute() {
        try {
            $result = $this->imageUploader->saveFileToTmpDir('image');
            $result['cookie'] = [
                'name' => $this->_getSession()->getName(),
                'value' => $this->_getSession()->getSessionId(),
                'lifetime' => $this->_getSession()->getCookieLifetime(),
                'path' => $this->_getSession()->getCookiePath(),
                'domain' => $this->_getSession()->getCookieDomain(),
            ];
        } catch (\Exception $e) {
            $result = ['error' => $e->getMessage(), 'errorcode' => $e->getCode()];
        }
        return $this->resultFactory->create(ResultFactory::TYPE_JSON)->setData($result);
    }
}
