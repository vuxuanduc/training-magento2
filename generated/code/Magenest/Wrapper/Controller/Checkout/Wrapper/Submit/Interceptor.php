<?php
namespace Magenest\Wrapper\Controller\Checkout\Wrapper\Submit;

/**
 * Interceptor class for @see \Magenest\Wrapper\Controller\Checkout\Wrapper\Submit
 */
class Interceptor extends \Magenest\Wrapper\Controller\Checkout\Wrapper\Submit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\Result\RawFactory $resultRawFactory, \Magenest\Wrapper\Model\Quote\WrapperFactory $wrapperQuoteFactory, \Magenest\Wrapper\Model\ResourceModel\Quote\Wrapper $wrapperQuoteResourceModel, \Magenest\Wrapper\Model\ResourceModel\Quote\Wrapper\CollectionFactory $wrapperQuoteCollectionFactory, \Magento\Quote\Api\CartTotalRepositoryInterface $cartTotalRepository, \Magento\Quote\Api\CartRepositoryInterface $cartRepository, \Magento\Customer\Model\Session $customerSession, \Magento\Quote\Model\QuoteIdMaskFactory $quoteIdMaskFactory, \Magento\Framework\Serialize\Serializer\Json $jsonFramework, \Magento\Framework\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($resultRawFactory, $wrapperQuoteFactory, $wrapperQuoteResourceModel, $wrapperQuoteCollectionFactory, $cartTotalRepository, $cartRepository, $customerSession, $quoteIdMaskFactory, $jsonFramework, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }

    /**
     * {@inheritdoc}
     */
    public function getActionFlag()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionFlag');
        return $pluginInfo ? $this->___callPlugins('getActionFlag', func_get_args(), $pluginInfo) : parent::getActionFlag();
    }

    /**
     * {@inheritdoc}
     */
    public function getRequest()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequest');
        return $pluginInfo ? $this->___callPlugins('getRequest', func_get_args(), $pluginInfo) : parent::getRequest();
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResponse');
        return $pluginInfo ? $this->___callPlugins('getResponse', func_get_args(), $pluginInfo) : parent::getResponse();
    }
}
