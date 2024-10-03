<?php

namespace Magenest\Banner\Block\Banner;

use Magenest\Banner\Model\ResourceModel\Banner\CollectionFactory;

use Magento\Framework\View\Element\Template;
use Magento\Framework\UrlInterface ;

class ListImage extends Template {
    protected $collectionFactory;
    protected $assetRepo;
    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        UrlInterface $assetRepo,
        array $data = [])
    {
        $this->assetRepo = $assetRepo;
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    public function getBanner() {
        $bannerCollection = $this->collectionFactory->create();
        $banners = $bannerCollection->addFieldToFilter('enabled', 'On')->getLastItem();
        return $banners;
    }

    public function getImageUrl() {
        $image = $this->getBanner()->getData();
        $imageUrl = $this->assetRepo->getBaseUrl(UrlInterface::URL_TYPE_MEDIA) . 'media/banners/banner/' . $image['image'];
        return $imageUrl;
    }
}
