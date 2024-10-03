<?php

namespace Magenest\Movie\Ui\Component\Listing\Column;

use Magento\Ui\Component\Listing\Columns\Column;

class Rating extends Column
{

    const SELECTED = "<span style='color: rgb(255 17 17);'>★</span>";
    const NOTSELECTED = "<span style='color: rgb(204, 204, 204);'>★</span>";

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
                if($item['rating']){
                    $data = [];
                    for($i = 0; $i < 5; $i++)
                        if($i < $item['rating'])
                            $data[] = self::SELECTED;
                        else
                            $data[] = self::NOTSELECTED;

                    $item['rating'] = $string = implode('', $data);
                }
            }
        }
        return parent::prepareDataSource($dataSource);
    }
}
