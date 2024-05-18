<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTbkScGeneralLinkConvertLkPageDTO {

    /**
        会场ID
     **/
    public $page_id;

    /**
        页面内定坑商品ID，用于素材-坑位还原
     **/
    public $target_item_list;


    public function getPageId() : string{
        return $this->page_id;
    }

    public function setPageId(string $pageId){
        $this->page_id = $pageId;
    }

    public function getTargetItemList() : array{
        return $this->target_item_list;
    }

    public function setTargetItemList(array $targetItemList){
        $this->target_item_list = $targetItemList;
    }


}

