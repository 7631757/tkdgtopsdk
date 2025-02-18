<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTbkScGeneralLinkParseTbkLinkDTO {

    /**
        解析结果
     **/
    public $material_url_list;


    public function getMaterialUrlList() : array{
        return $this->material_url_list;
    }

    public function setMaterialUrlList(array $materialUrlList){
        $this->material_url_list = $materialUrlList;
    }


}

