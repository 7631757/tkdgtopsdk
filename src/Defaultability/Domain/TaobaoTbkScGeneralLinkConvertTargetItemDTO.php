<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTbkScGeneralLinkConvertTargetItemDTO {

    /**
        页面内定坑商品ID，用于素材-坑位还原
     **/
    public $item_id_list;


    public function getItemIdList() : array{
        return $this->item_id_list;
    }

    public function setItemIdList(array $itemIdList){
        $this->item_id_list = $itemIdList;
    }


}

