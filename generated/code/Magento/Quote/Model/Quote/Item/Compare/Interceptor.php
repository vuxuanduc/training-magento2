<?php
namespace Magento\Quote\Model\Quote\Item\Compare;

/**
 * Interceptor class for @see \Magento\Quote\Model\Quote\Item\Compare
 */
class Interceptor extends \Magento\Quote\Model\Quote\Item\Compare implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Framework\Serialize\JsonValidator $jsonValidator = null)
    {
        $this->___init();
        parent::__construct($serializer, $jsonValidator);
    }

    /**
     * {@inheritdoc}
     */
    public function compare(\Magento\Quote\Model\Quote\Item $target, \Magento\Quote\Model\Quote\Item $compared)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'compare');
        return $pluginInfo ? $this->___callPlugins('compare', func_get_args(), $pluginInfo) : parent::compare($target, $compared);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions(\Magento\Quote\Model\Quote\Item $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptions');
        return $pluginInfo ? $this->___callPlugins('getOptions', func_get_args(), $pluginInfo) : parent::getOptions($item);
    }
}
