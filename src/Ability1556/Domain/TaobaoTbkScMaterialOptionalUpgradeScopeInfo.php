<?php
namespace Topsdk\Topapi\Ability1556\Domain;

class TaobaoTbkScMaterialOptionalUpgradeScopeInfo {

    /**
        是否品牌精选，0不是，1是
     **/
    public $superior_brand;


    public function getSuperiorBrand() : int{
        return $this->superior_brand;
    }

    public function setSuperiorBrand(int $superiorBrand){
        $this->superior_brand = $superiorBrand;
    }


}

