<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTbkScGeneralLinkConvertLkMaterialDTO {

    /**
        物料链接，可以为url或淘口令
     **/
    public $material_url;

    /**
        是否指定券，1-指定 0-不指定 默认为0（邀约制权限，仅面向KA自用型工具服务商）
     **/
    public $is_target_coupon;

    /**
        优惠券id（邀约制权限，仅面向KA自用型工具服务商）
     **/
    public $coupon_id;


    public function getMaterialUrl() : string{
        return $this->material_url;
    }

    public function setMaterialUrl(string $materialUrl){
        $this->material_url = $materialUrl;
    }

    public function getIsTargetCoupon() : int{
        return $this->is_target_coupon;
    }

    public function setIsTargetCoupon(int $isTargetCoupon){
        $this->is_target_coupon = $isTargetCoupon;
    }

    public function getCouponId() : string{
        return $this->coupon_id;
    }

    public function setCouponId(string $couponId){
        $this->coupon_id = $couponId;
    }


}

