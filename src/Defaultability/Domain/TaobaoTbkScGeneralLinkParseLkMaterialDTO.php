<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTbkScGeneralLinkParseLkMaterialDTO {

    /**
        物料链接，可以为url或淘口令
     **/
    public $material_url;


    public function getMaterialUrl() : string{
        return $this->material_url;
    }

    public function setMaterialUrl(string $materialUrl){
        $this->material_url = $materialUrl;
    }


}

