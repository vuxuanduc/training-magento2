<?php
namespace Magenest\Movie\Block\Adminhtml\Report;

use Magento\Framework\Module\ModuleListInterface;

class First extends \Magento\Framework\View\Element\Template
{
    /**
     * @var ModuleListInterface
     */
    protected $moduleList;

    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param ModuleListInterface $moduleList
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        ModuleListInterface $moduleList
    ) {
        $this->moduleList = $moduleList;
        parent::__construct($context);
    }

    /**
     * Get count of custom modules (excluding Magento core modules)
     *
     * @return int
     */
    public function getCustomModuleCount()
    {
        $modules = $this->moduleList->getNames();

        $coutModules = [];

        foreach ($modules as $md) {
            if (!preg_match('/^(Magento_|PayPal_)/', $md)) {
                $coutModules[] = $md;
            }
        }

        return count($coutModules);
    }
}
