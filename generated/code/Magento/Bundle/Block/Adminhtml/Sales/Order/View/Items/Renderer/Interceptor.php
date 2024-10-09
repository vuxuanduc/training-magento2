<?php
namespace Magento\Bundle\Block\Adminhtml\Sales\Order\View\Items\Renderer;

/**
 * Interceptor class for @see \Magento\Bundle\Block\Adminhtml\Sales\Order\View\Items\Renderer
 */
class Interceptor extends \Magento\Bundle\Block\Adminhtml\Sales\Order\View\Items\Renderer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration, \Magento\Framework\Registry $registry, \Magento\GiftMessage\Helper\Message $messageHelper, \Magento\Checkout\Helper\Data $checkoutHelper, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Catalog\Helper\Data $catalogHelper = null)
    {
        $this->___init();
        parent::__construct($context, $stockRegistry, $stockConfiguration, $registry, $messageHelper, $checkoutHelper, $data, $serializer, $catalogHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function truncateString($value, $length = 80, $etc = '...', &$remainder = '', $breakWords = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'truncateString');
        return $pluginInfo ? $this->___callPlugins('truncateString', func_get_args(), $pluginInfo) : parent::truncateString($value, $length, $etc, $remainder, $breakWords);
    }

    /**
     * {@inheritdoc}
     */
    public function isShipmentSeparately($item = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isShipmentSeparately');
        return $pluginInfo ? $this->___callPlugins('isShipmentSeparately', func_get_args(), $pluginInfo) : parent::isShipmentSeparately($item);
    }

    /**
     * {@inheritdoc}
     */
    public function isChildCalculated($item = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isChildCalculated');
        return $pluginInfo ? $this->___callPlugins('isChildCalculated', func_get_args(), $pluginInfo) : parent::isChildCalculated($item);
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectionAttributes($item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSelectionAttributes');
        return $pluginInfo ? $this->___callPlugins('getSelectionAttributes', func_get_args(), $pluginInfo) : parent::getSelectionAttributes($item);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrderOptions');
        return $pluginInfo ? $this->___callPlugins('getOrderOptions', func_get_args(), $pluginInfo) : parent::getOrderOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getValueHtml($item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueHtml');
        return $pluginInfo ? $this->___callPlugins('getValueHtml', func_get_args(), $pluginInfo) : parent::getValueHtml($item);
    }

    /**
     * {@inheritdoc}
     */
    public function canShowPriceInfo($item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canShowPriceInfo');
        return $pluginInfo ? $this->___callPlugins('canShowPriceInfo', func_get_args(), $pluginInfo) : parent::canShowPriceInfo($item);
    }

    /**
     * {@inheritdoc}
     */
    public function getItem()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItem');
        return $pluginInfo ? $this->___callPlugins('getItem', func_get_args(), $pluginInfo) : parent::getItem();
    }

    /**
     * {@inheritdoc}
     */
    public function getFieldId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFieldId');
        return $pluginInfo ? $this->___callPlugins('getFieldId', func_get_args(), $pluginInfo) : parent::getFieldId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function getFieldIdPrefix()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFieldIdPrefix');
        return $pluginInfo ? $this->___callPlugins('getFieldIdPrefix', func_get_args(), $pluginInfo) : parent::getFieldIdPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function canDisplayContainer()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canDisplayContainer');
        return $pluginInfo ? $this->___callPlugins('canDisplayContainer', func_get_args(), $pluginInfo) : parent::canDisplayContainer();
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultSender()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultSender');
        return $pluginInfo ? $this->___callPlugins('getDefaultSender', func_get_args(), $pluginInfo) : parent::getDefaultSender();
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultRecipient()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultRecipient');
        return $pluginInfo ? $this->___callPlugins('getDefaultRecipient', func_get_args(), $pluginInfo) : parent::getDefaultRecipient();
    }

    /**
     * {@inheritdoc}
     */
    public function getFieldName($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFieldName');
        return $pluginInfo ? $this->___callPlugins('getFieldName', func_get_args(), $pluginInfo) : parent::getFieldName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getMessage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMessage');
        return $pluginInfo ? $this->___callPlugins('getMessage', func_get_args(), $pluginInfo) : parent::getMessage();
    }

    /**
     * {@inheritdoc}
     */
    public function getSaveUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSaveUrl');
        return $pluginInfo ? $this->___callPlugins('getSaveUrl', func_get_args(), $pluginInfo) : parent::getSaveUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getHtmlId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHtmlId');
        return $pluginInfo ? $this->___callPlugins('getHtmlId', func_get_args(), $pluginInfo) : parent::getHtmlId();
    }

    /**
     * {@inheritdoc}
     */
    public function canDisplayGiftmessage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canDisplayGiftmessage');
        return $pluginInfo ? $this->___callPlugins('canDisplayGiftmessage', func_get_args(), $pluginInfo) : parent::canDisplayGiftmessage();
    }

    /**
     * {@inheritdoc}
     */
    public function displaySubtotalInclTax($item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'displaySubtotalInclTax');
        return $pluginInfo ? $this->___callPlugins('displaySubtotalInclTax', func_get_args(), $pluginInfo) : parent::displaySubtotalInclTax($item);
    }

    /**
     * {@inheritdoc}
     */
    public function displayPriceInclTax(\Magento\Framework\DataObject $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'displayPriceInclTax');
        return $pluginInfo ? $this->___callPlugins('displayPriceInclTax', func_get_args(), $pluginInfo) : parent::displayPriceInclTax($item);
    }

    /**
     * {@inheritdoc}
     */
    public function getColumnHtml(\Magento\Framework\DataObject $item, $column, $field = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getColumnHtml');
        return $pluginInfo ? $this->___callPlugins('getColumnHtml', func_get_args(), $pluginInfo) : parent::getColumnHtml($item, $column, $field);
    }

    /**
     * {@inheritdoc}
     */
    public function getColumns()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getColumns');
        return $pluginInfo ? $this->___callPlugins('getColumns', func_get_args(), $pluginInfo) : parent::getColumns();
    }

    /**
     * {@inheritdoc}
     */
    public function setColumnRenders(array $blocks)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setColumnRenders');
        return $pluginInfo ? $this->___callPlugins('setColumnRenders', func_get_args(), $pluginInfo) : parent::setColumnRenders($blocks);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemRenderer($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemRenderer');
        return $pluginInfo ? $this->___callPlugins('getItemRenderer', func_get_args(), $pluginInfo) : parent::getItemRenderer($type);
    }

    /**
     * {@inheritdoc}
     */
    public function getColumnRenderer($column, $compositePart = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getColumnRenderer');
        return $pluginInfo ? $this->___callPlugins('getColumnRenderer', func_get_args(), $pluginInfo) : parent::getColumnRenderer($column, $compositePart);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemHtml(\Magento\Framework\DataObject $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemHtml');
        return $pluginInfo ? $this->___callPlugins('getItemHtml', func_get_args(), $pluginInfo) : parent::getItemHtml($item);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemExtraInfoHtml(\Magento\Framework\DataObject $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemExtraInfoHtml');
        return $pluginInfo ? $this->___callPlugins('getItemExtraInfoHtml', func_get_args(), $pluginInfo) : parent::getItemExtraInfoHtml($item);
    }

    /**
     * {@inheritdoc}
     */
    public function getCreditmemo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCreditmemo');
        return $pluginInfo ? $this->___callPlugins('getCreditmemo', func_get_args(), $pluginInfo) : parent::getCreditmemo();
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrder');
        return $pluginInfo ? $this->___callPlugins('getOrder', func_get_args(), $pluginInfo) : parent::getOrder();
    }

    /**
     * {@inheritdoc}
     */
    public function getPriceDataObject()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPriceDataObject');
        return $pluginInfo ? $this->___callPlugins('getPriceDataObject', func_get_args(), $pluginInfo) : parent::getPriceDataObject();
    }

    /**
     * {@inheritdoc}
     */
    public function displayPriceAttribute($code, $strong = false, $separator = '<br />')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'displayPriceAttribute');
        return $pluginInfo ? $this->___callPlugins('displayPriceAttribute', func_get_args(), $pluginInfo) : parent::displayPriceAttribute($code, $strong, $separator);
    }

    /**
     * {@inheritdoc}
     */
    public function displayPrices($basePrice, $price, $strong = false, $separator = '<br />')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'displayPrices');
        return $pluginInfo ? $this->___callPlugins('displayPrices', func_get_args(), $pluginInfo) : parent::displayPrices($basePrice, $price, $strong, $separator);
    }

    /**
     * {@inheritdoc}
     */
    public function displayRoundedPrices($basePrice, $price, $precision = 2, $strong = false, $separator = '<br />')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'displayRoundedPrices');
        return $pluginInfo ? $this->___callPlugins('displayRoundedPrices', func_get_args(), $pluginInfo) : parent::displayRoundedPrices($basePrice, $price, $precision, $strong, $separator);
    }

    /**
     * {@inheritdoc}
     */
    public function displayTaxCalculation(\Magento\Framework\DataObject $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'displayTaxCalculation');
        return $pluginInfo ? $this->___callPlugins('displayTaxCalculation', func_get_args(), $pluginInfo) : parent::displayTaxCalculation($item);
    }

    /**
     * {@inheritdoc}
     */
    public function displayTaxPercent(\Magento\Framework\DataObject $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'displayTaxPercent');
        return $pluginInfo ? $this->___callPlugins('displayTaxPercent', func_get_args(), $pluginInfo) : parent::displayTaxPercent($item);
    }

    /**
     * {@inheritdoc}
     */
    public function canCreateShipment()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canCreateShipment');
        return $pluginInfo ? $this->___callPlugins('canCreateShipment', func_get_args(), $pluginInfo) : parent::canCreateShipment();
    }

    /**
     * {@inheritdoc}
     */
    public function setCanEditQty($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCanEditQty');
        return $pluginInfo ? $this->___callPlugins('setCanEditQty', func_get_args(), $pluginInfo) : parent::setCanEditQty($value);
    }

    /**
     * {@inheritdoc}
     */
    public function canEditQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canEditQty');
        return $pluginInfo ? $this->___callPlugins('canEditQty', func_get_args(), $pluginInfo) : parent::canEditQty();
    }

    /**
     * {@inheritdoc}
     */
    public function canCapture()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canCapture');
        return $pluginInfo ? $this->___callPlugins('canCapture', func_get_args(), $pluginInfo) : parent::canCapture();
    }

    /**
     * {@inheritdoc}
     */
    public function formatPrice($price)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatPrice');
        return $pluginInfo ? $this->___callPlugins('formatPrice', func_get_args(), $pluginInfo) : parent::formatPrice($price);
    }

    /**
     * {@inheritdoc}
     */
    public function getSource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSource');
        return $pluginInfo ? $this->___callPlugins('getSource', func_get_args(), $pluginInfo) : parent::getSource();
    }

    /**
     * {@inheritdoc}
     */
    public function getInvoice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getInvoice');
        return $pluginInfo ? $this->___callPlugins('getInvoice', func_get_args(), $pluginInfo) : parent::getInvoice();
    }

    /**
     * {@inheritdoc}
     */
    public function canReturnToStock($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canReturnToStock');
        return $pluginInfo ? $this->___callPlugins('canReturnToStock', func_get_args(), $pluginInfo) : parent::canReturnToStock($store);
    }

    /**
     * {@inheritdoc}
     */
    public function canReturnItemToStock($item = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canReturnItemToStock');
        return $pluginInfo ? $this->___callPlugins('canReturnItemToStock', func_get_args(), $pluginInfo) : parent::canReturnItemToStock($item);
    }

    /**
     * {@inheritdoc}
     */
    public function canParentReturnToStock($item = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canParentReturnToStock');
        return $pluginInfo ? $this->___callPlugins('canParentReturnToStock', func_get_args(), $pluginInfo) : parent::canParentReturnToStock($item);
    }

    /**
     * {@inheritdoc}
     */
    public function canShipPartially($order = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canShipPartially');
        return $pluginInfo ? $this->___callPlugins('canShipPartially', func_get_args(), $pluginInfo) : parent::canShipPartially($order);
    }

    /**
     * {@inheritdoc}
     */
    public function canShipPartiallyItem($order = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canShipPartiallyItem');
        return $pluginInfo ? $this->___callPlugins('canShipPartiallyItem', func_get_args(), $pluginInfo) : parent::canShipPartiallyItem($order);
    }

    /**
     * {@inheritdoc}
     */
    public function isShipmentRegular()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isShipmentRegular');
        return $pluginInfo ? $this->___callPlugins('isShipmentRegular', func_get_args(), $pluginInfo) : parent::isShipmentRegular();
    }

    /**
     * {@inheritdoc}
     */
    public function getFormKey()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFormKey');
        return $pluginInfo ? $this->___callPlugins('getFormKey', func_get_args(), $pluginInfo) : parent::getFormKey();
    }

    /**
     * {@inheritdoc}
     */
    public function isOutputEnabled($moduleName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isOutputEnabled');
        return $pluginInfo ? $this->___callPlugins('isOutputEnabled', func_get_args(), $pluginInfo) : parent::isOutputEnabled($moduleName);
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorization()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAuthorization');
        return $pluginInfo ? $this->___callPlugins('getAuthorization', func_get_args(), $pluginInfo) : parent::getAuthorization();
    }

    /**
     * {@inheritdoc}
     */
    public function getToolbar()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getToolbar');
        return $pluginInfo ? $this->___callPlugins('getToolbar', func_get_args(), $pluginInfo) : parent::getToolbar();
    }

    /**
     * {@inheritdoc}
     */
    public function setTemplateContext($templateContext)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTemplateContext');
        return $pluginInfo ? $this->___callPlugins('setTemplateContext', func_get_args(), $pluginInfo) : parent::setTemplateContext($templateContext);
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTemplate');
        return $pluginInfo ? $this->___callPlugins('getTemplate', func_get_args(), $pluginInfo) : parent::getTemplate();
    }

    /**
     * {@inheritdoc}
     */
    public function setTemplate($template)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTemplate');
        return $pluginInfo ? $this->___callPlugins('setTemplate', func_get_args(), $pluginInfo) : parent::setTemplate($template);
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplateFile($template = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTemplateFile');
        return $pluginInfo ? $this->___callPlugins('getTemplateFile', func_get_args(), $pluginInfo) : parent::getTemplateFile($template);
    }

    /**
     * {@inheritdoc}
     */
    public function getArea()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getArea');
        return $pluginInfo ? $this->___callPlugins('getArea', func_get_args(), $pluginInfo) : parent::getArea();
    }

    /**
     * {@inheritdoc}
     */
    public function assign($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'assign');
        return $pluginInfo ? $this->___callPlugins('assign', func_get_args(), $pluginInfo) : parent::assign($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function fetchView($fileName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'fetchView');
        return $pluginInfo ? $this->___callPlugins('fetchView', func_get_args(), $pluginInfo) : parent::fetchView($fileName);
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseUrl');
        return $pluginInfo ? $this->___callPlugins('getBaseUrl', func_get_args(), $pluginInfo) : parent::getBaseUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getObjectData(\Magento\Framework\DataObject $object, $key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getObjectData');
        return $pluginInfo ? $this->___callPlugins('getObjectData', func_get_args(), $pluginInfo) : parent::getObjectData($object, $key);
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheKeyInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheKeyInfo');
        return $pluginInfo ? $this->___callPlugins('getCacheKeyInfo', func_get_args(), $pluginInfo) : parent::getCacheKeyInfo();
    }

    /**
     * {@inheritdoc}
     */
    public function getJsLayout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getJsLayout');
        return $pluginInfo ? $this->___callPlugins('getJsLayout', func_get_args(), $pluginInfo) : parent::getJsLayout();
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
    public function getParentBlock()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentBlock');
        return $pluginInfo ? $this->___callPlugins('getParentBlock', func_get_args(), $pluginInfo) : parent::getParentBlock();
    }

    /**
     * {@inheritdoc}
     */
    public function setLayout(\Magento\Framework\View\LayoutInterface $layout)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLayout');
        return $pluginInfo ? $this->___callPlugins('setLayout', func_get_args(), $pluginInfo) : parent::setLayout($layout);
    }

    /**
     * {@inheritdoc}
     */
    public function getLayout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLayout');
        return $pluginInfo ? $this->___callPlugins('getLayout', func_get_args(), $pluginInfo) : parent::getLayout();
    }

    /**
     * {@inheritdoc}
     */
    public function setNameInLayout($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setNameInLayout');
        return $pluginInfo ? $this->___callPlugins('setNameInLayout', func_get_args(), $pluginInfo) : parent::setNameInLayout($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildNames()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildNames');
        return $pluginInfo ? $this->___callPlugins('getChildNames', func_get_args(), $pluginInfo) : parent::getChildNames();
    }

    /**
     * {@inheritdoc}
     */
    public function setAttribute($name, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAttribute');
        return $pluginInfo ? $this->___callPlugins('setAttribute', func_get_args(), $pluginInfo) : parent::setAttribute($name, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function setChild($alias, $block)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setChild');
        return $pluginInfo ? $this->___callPlugins('setChild', func_get_args(), $pluginInfo) : parent::setChild($alias, $block);
    }

    /**
     * {@inheritdoc}
     */
    public function addChild($alias, $block, $data = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addChild');
        return $pluginInfo ? $this->___callPlugins('addChild', func_get_args(), $pluginInfo) : parent::addChild($alias, $block, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetChild($alias)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetChild');
        return $pluginInfo ? $this->___callPlugins('unsetChild', func_get_args(), $pluginInfo) : parent::unsetChild($alias);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetCallChild($alias, $callback, $result, $params)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetCallChild');
        return $pluginInfo ? $this->___callPlugins('unsetCallChild', func_get_args(), $pluginInfo) : parent::unsetCallChild($alias, $callback, $result, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetChildren()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetChildren');
        return $pluginInfo ? $this->___callPlugins('unsetChildren', func_get_args(), $pluginInfo) : parent::unsetChildren();
    }

    /**
     * {@inheritdoc}
     */
    public function getChildBlock($alias)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildBlock');
        return $pluginInfo ? $this->___callPlugins('getChildBlock', func_get_args(), $pluginInfo) : parent::getChildBlock($alias);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildHtml($alias = '', $useCache = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildHtml');
        return $pluginInfo ? $this->___callPlugins('getChildHtml', func_get_args(), $pluginInfo) : parent::getChildHtml($alias, $useCache);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildChildHtml($alias, $childChildAlias = '', $useCache = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildChildHtml');
        return $pluginInfo ? $this->___callPlugins('getChildChildHtml', func_get_args(), $pluginInfo) : parent::getChildChildHtml($alias, $childChildAlias, $useCache);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockHtml($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBlockHtml');
        return $pluginInfo ? $this->___callPlugins('getBlockHtml', func_get_args(), $pluginInfo) : parent::getBlockHtml($name);
    }

    /**
     * {@inheritdoc}
     */
    public function insert($element, $siblingName = 0, $after = true, $alias = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'insert');
        return $pluginInfo ? $this->___callPlugins('insert', func_get_args(), $pluginInfo) : parent::insert($element, $siblingName, $after, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function append($element, $alias = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'append');
        return $pluginInfo ? $this->___callPlugins('append', func_get_args(), $pluginInfo) : parent::append($element, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupChildNames($groupName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGroupChildNames');
        return $pluginInfo ? $this->___callPlugins('getGroupChildNames', func_get_args(), $pluginInfo) : parent::getGroupChildNames($groupName);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildData($alias, $key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildData');
        return $pluginInfo ? $this->___callPlugins('getChildData', func_get_args(), $pluginInfo) : parent::getChildData($alias, $key);
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toHtml');
        return $pluginInfo ? $this->___callPlugins('toHtml', func_get_args(), $pluginInfo) : parent::toHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function getUiId($arg1 = null, $arg2 = null, $arg3 = null, $arg4 = null, $arg5 = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUiId');
        return $pluginInfo ? $this->___callPlugins('getUiId', func_get_args(), $pluginInfo) : parent::getUiId($arg1, $arg2, $arg3, $arg4, $arg5);
    }

    /**
     * {@inheritdoc}
     */
    public function getJsId($arg1 = null, $arg2 = null, $arg3 = null, $arg4 = null, $arg5 = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getJsId');
        return $pluginInfo ? $this->___callPlugins('getJsId', func_get_args(), $pluginInfo) : parent::getJsId($arg1, $arg2, $arg3, $arg4, $arg5);
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl($route = '', $params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrl');
        return $pluginInfo ? $this->___callPlugins('getUrl', func_get_args(), $pluginInfo) : parent::getUrl($route, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function getViewFileUrl($fileId, array $params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getViewFileUrl');
        return $pluginInfo ? $this->___callPlugins('getViewFileUrl', func_get_args(), $pluginInfo) : parent::getViewFileUrl($fileId, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function formatDate($date = null, $format = 3, $showTime = false, $timezone = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatDate');
        return $pluginInfo ? $this->___callPlugins('formatDate', func_get_args(), $pluginInfo) : parent::formatDate($date, $format, $showTime, $timezone);
    }

    /**
     * {@inheritdoc}
     */
    public function formatTime($time = null, $format = 3, $showDate = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatTime');
        return $pluginInfo ? $this->___callPlugins('formatTime', func_get_args(), $pluginInfo) : parent::formatTime($time, $format, $showDate);
    }

    /**
     * {@inheritdoc}
     */
    public function getModuleName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getModuleName');
        return $pluginInfo ? $this->___callPlugins('getModuleName', func_get_args(), $pluginInfo) : parent::getModuleName();
    }

    /**
     * {@inheritdoc}
     */
    public function escapeHtml($data, $allowedTags = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeHtml');
        return $pluginInfo ? $this->___callPlugins('escapeHtml', func_get_args(), $pluginInfo) : parent::escapeHtml($data, $allowedTags);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeJs($string)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeJs');
        return $pluginInfo ? $this->___callPlugins('escapeJs', func_get_args(), $pluginInfo) : parent::escapeJs($string);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeHtmlAttr($string, $escapeSingleQuote = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeHtmlAttr');
        return $pluginInfo ? $this->___callPlugins('escapeHtmlAttr', func_get_args(), $pluginInfo) : parent::escapeHtmlAttr($string, $escapeSingleQuote);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeCss($string)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeCss');
        return $pluginInfo ? $this->___callPlugins('escapeCss', func_get_args(), $pluginInfo) : parent::escapeCss($string);
    }

    /**
     * {@inheritdoc}
     */
    public function stripTags($data, $allowableTags = null, $allowHtmlEntities = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'stripTags');
        return $pluginInfo ? $this->___callPlugins('stripTags', func_get_args(), $pluginInfo) : parent::stripTags($data, $allowableTags, $allowHtmlEntities);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeUrl($string)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeUrl');
        return $pluginInfo ? $this->___callPlugins('escapeUrl', func_get_args(), $pluginInfo) : parent::escapeUrl($string);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeXssInUrl($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeXssInUrl');
        return $pluginInfo ? $this->___callPlugins('escapeXssInUrl', func_get_args(), $pluginInfo) : parent::escapeXssInUrl($data);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeQuote($data, $addSlashes = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeQuote');
        return $pluginInfo ? $this->___callPlugins('escapeQuote', func_get_args(), $pluginInfo) : parent::escapeQuote($data, $addSlashes);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeJsQuote($data, $quote = '\'')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeJsQuote');
        return $pluginInfo ? $this->___callPlugins('escapeJsQuote', func_get_args(), $pluginInfo) : parent::escapeJsQuote($data, $quote);
    }

    /**
     * {@inheritdoc}
     */
    public function getNameInLayout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNameInLayout');
        return $pluginInfo ? $this->___callPlugins('getNameInLayout', func_get_args(), $pluginInfo) : parent::getNameInLayout();
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheKey()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheKey');
        return $pluginInfo ? $this->___callPlugins('getCacheKey', func_get_args(), $pluginInfo) : parent::getCacheKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getVar($name, $module = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVar');
        return $pluginInfo ? $this->___callPlugins('getVar', func_get_args(), $pluginInfo) : parent::getVar($name, $module);
    }

    /**
     * {@inheritdoc}
     */
    public function isScopePrivate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isScopePrivate');
        return $pluginInfo ? $this->___callPlugins('isScopePrivate', func_get_args(), $pluginInfo) : parent::isScopePrivate();
    }

    /**
     * {@inheritdoc}
     */
    public function addData(array $arr)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addData');
        return $pluginInfo ? $this->___callPlugins('addData', func_get_args(), $pluginInfo) : parent::addData($arr);
    }

    /**
     * {@inheritdoc}
     */
    public function setData($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        return $pluginInfo ? $this->___callPlugins('setData', func_get_args(), $pluginInfo) : parent::setData($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetData');
        return $pluginInfo ? $this->___callPlugins('unsetData', func_get_args(), $pluginInfo) : parent::unsetData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $index = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData($key, $index);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByPath');
        return $pluginInfo ? $this->___callPlugins('getDataByPath', func_get_args(), $pluginInfo) : parent::getDataByPath($path);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByKey($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByKey');
        return $pluginInfo ? $this->___callPlugins('getDataByKey', func_get_args(), $pluginInfo) : parent::getDataByKey($key);
    }

    /**
     * {@inheritdoc}
     */
    public function setDataUsingMethod($key, $args = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataUsingMethod');
        return $pluginInfo ? $this->___callPlugins('setDataUsingMethod', func_get_args(), $pluginInfo) : parent::setDataUsingMethod($key, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataUsingMethod($key, $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataUsingMethod');
        return $pluginInfo ? $this->___callPlugins('getDataUsingMethod', func_get_args(), $pluginInfo) : parent::getDataUsingMethod($key, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function hasData($key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasData');
        return $pluginInfo ? $this->___callPlugins('hasData', func_get_args(), $pluginInfo) : parent::hasData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        return $pluginInfo ? $this->___callPlugins('toArray', func_get_args(), $pluginInfo) : parent::toArray($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToArray');
        return $pluginInfo ? $this->___callPlugins('convertToArray', func_get_args(), $pluginInfo) : parent::convertToArray($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function toXml(array $keys = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toXml');
        return $pluginInfo ? $this->___callPlugins('toXml', func_get_args(), $pluginInfo) : parent::toXml($keys, $rootName, $addOpenTag, $addCdata);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToXml(array $arrAttributes = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToXml');
        return $pluginInfo ? $this->___callPlugins('convertToXml', func_get_args(), $pluginInfo) : parent::convertToXml($arrAttributes, $rootName, $addOpenTag, $addCdata);
    }

    /**
     * {@inheritdoc}
     */
    public function toJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toJson');
        return $pluginInfo ? $this->___callPlugins('toJson', func_get_args(), $pluginInfo) : parent::toJson($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToJson');
        return $pluginInfo ? $this->___callPlugins('convertToJson', func_get_args(), $pluginInfo) : parent::convertToJson($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function toString($format = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toString');
        return $pluginInfo ? $this->___callPlugins('toString', func_get_args(), $pluginInfo) : parent::toString($format);
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        return $pluginInfo ? $this->___callPlugins('__call', func_get_args(), $pluginInfo) : parent::__call($method, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEmpty');
        return $pluginInfo ? $this->___callPlugins('isEmpty', func_get_args(), $pluginInfo) : parent::isEmpty();
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($keys = [], $valueSeparator = '=', $fieldSeparator = ' ', $quote = '"')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serialize');
        return $pluginInfo ? $this->___callPlugins('serialize', func_get_args(), $pluginInfo) : parent::serialize($keys, $valueSeparator, $fieldSeparator, $quote);
    }

    /**
     * {@inheritdoc}
     */
    public function debug($data = null, &$objects = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'debug');
        return $pluginInfo ? $this->___callPlugins('debug', func_get_args(), $pluginInfo) : parent::debug($data, $objects);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetSet');
        return $pluginInfo ? $this->___callPlugins('offsetSet', func_get_args(), $pluginInfo) : parent::offsetSet($offset, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetExists');
        return $pluginInfo ? $this->___callPlugins('offsetExists', func_get_args(), $pluginInfo) : parent::offsetExists($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetUnset');
        return $pluginInfo ? $this->___callPlugins('offsetUnset', func_get_args(), $pluginInfo) : parent::offsetUnset($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetGet');
        return $pluginInfo ? $this->___callPlugins('offsetGet', func_get_args(), $pluginInfo) : parent::offsetGet($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function __debugInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__debugInfo');
        return $pluginInfo ? $this->___callPlugins('__debugInfo', func_get_args(), $pluginInfo) : parent::__debugInfo();
    }
}
