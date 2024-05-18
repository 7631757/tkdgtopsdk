<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTbkScGeneralLinkConvertTbkLinkDTO {

    /**
        转链结果
     **/
    public $material_url_list;

    /**
        店铺转链结果
     **/
    public $shop_url_list;

    /**
        活动转链信息
     **/
    public $event_url_list;

    /**
        单品转链信息
     **/
    public $item_url_list;


    public function getMaterialUrlList() : array{
        return $this->material_url_list;
    }

    public function setMaterialUrlList(array $materialUrlList){
        $this->material_url_list = $materialUrlList;
    }

    public function getShopUrlList() : array{
        return $this->shop_url_list;
    }

    public function setShopUrlList(array $shopUrlList){
        $this->shop_url_list = $shopUrlList;
    }

    public function getEventUrlList() : array{
        return $this->event_url_list;
    }

    public function setEventUrlList(array $eventUrlList){
        $this->event_url_list = $eventUrlList;
    }

    public function getItemUrlList() : array{
        return $this->item_url_list;
    }

    public function setItemUrlList(array $itemUrlList){
        $this->item_url_list = $itemUrlList;
    }


}

