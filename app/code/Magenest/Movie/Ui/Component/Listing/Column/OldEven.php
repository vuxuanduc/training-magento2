<?php

namespace Magenest\Movie\Ui\Component\Listing\Column;

use Magento\Ui\Component\Listing\Columns\Column;

class OldEven extends Column
{

    const EVEN= "<span class='grid-severity-notice'>success</span>";
    const OLD = "<span class='grid-severity-critical'>error</span>";

    /**
     * Prepare Data Source
     *
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        if(isset($dataSource['data']['items'])){
            foreach($dataSource['data']['items'] as &$item){
                if($item['entity_id'] % 2 != 0){
                    $item['old_even'] = self::EVEN;
                }
                $item['old_even'] = self::OLD;
            }
        }
        return parent::prepareDataSource($dataSource);
    }
}
