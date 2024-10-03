<?php
namespace Magenest\SubTab\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer as EventObserver;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\Config\Storage\WriterInterface;

class Triggerconfig implements ObserverInterface
{
    private $request;
    private $configWriter;

    public function __construct(
        RequestInterface $request,
        WriterInterface $configWriter
    ){
        $this->request = $request;
        $this->configWriter = $configWriter;
    }
    public function execute(EventObserver $observer)
    {
        $this->configWriter->save('subtab/general/field1', 'Pong');
        return $this;
    }
}
?>
