<?php
namespace Magenest\FirstPage\Block;

use Magenest\Banner\Model\ResourceModel\Banner\CollectionFactory;
use Magenest\Banner\Model\Banner;
use Magento\Framework\View\Element\Template;

class FirstPage extends Template {

    protected $bannerFactory;
    protected $bannerCollectionFactory;

    public function __construct(
        Template\Context $context,
        Banner $bannerFactory,
        CollectionFactory $bannerCollectionFactory,
        array $data = []
    )
    {
        $this->bannerFactory = $bannerFactory;
        $this->bannerCollectionFactory = $bannerCollectionFactory;
        parent::__construct($context, $data);
    }

    public function getBannerId() {



        $modelBanner = $this->bannerFactory->create();
        $banner = $modelBanner->load(5);


        return $banner;
    }
}
?>
