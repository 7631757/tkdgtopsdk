<?php
namespace Topsdk\Topapi\Ability2153\Domain;

class TaobaoTbkScMaterialRecommendScopeInfo {

    /**
        是否品牌精选，0不是，1是
     **/
    public $superior_brand;


    public function getSuperiorBrand() : string{
        return $this->superior_brand;
    }

    public function setSuperiorBrand(string $superiorBrand){
        $this->superior_brand = $superiorBrand;
    }


}

