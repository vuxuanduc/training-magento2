<?php
namespace Magenest\Movie\Block\Adminhtml\Product\Edit\Tab;

class DatePicker extends \Magento\Config\Block\System\Config\Form\Field
{
   public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
   {
       $element->setDateFormat(\Magento\Framework\Stdlib\DateTime::DATE_INTERNAL_FORMAT);
       $element->setTimeFormat('HH:mm:ss');
       $element->setShowsTime(true);
       return parent::render($element);
   }
}
