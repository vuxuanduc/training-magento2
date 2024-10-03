<?php

namespace Magenest\Banner\Block\Banner;
use Magenest\Banner\Model\ResourceModel\BannerFactory;
use Magenest\Banner\Model\Banner;
use Magento\Framework\View\Element\Template;


class TestBanner extends Template {

    protected $bannerFactory;
    protected $banner;

    public function __construct(
        Template\Context $context,
        BannerFactory $bannerFactory,
        Banner $banner
    )
    {
        $this->bannerFactory = $bannerFactory;
        $this->banner = $banner;
        parent::__construct($context);
    }

    public function getBannerId($id) {

        $modelBannerFactory = $this->bannerFactory->create();
        $modelBanner = $this->banner->load($id);
        $banner = $modelBannerFactory->load($modelBanner);
        return $banner;
    }
}
