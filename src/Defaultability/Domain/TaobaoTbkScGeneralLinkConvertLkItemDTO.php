<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTbkScGeneralLinkConvertLkItemDTO {

    /**
        商品ID
     **/
    public $item_id;

    /**
        入参商品id下的skuid，传入时会透传至转链结果url中
     **/
    public $sku_id;

    /**
        是否指定券，1-指定 0-不指定 默认为0（邀约制权限，仅面向KA自用型工具服务商）
     **/
    public $is_target_coupon;

    /**
        优惠券id（邀约制权限，仅面向KA自用型工具服务商）
     **/
    public $coupon_id;

    /**
        淘宝客外部用户标记，如自身系统账户ID；微信ID等
     **/
    public $external_id;

    /**
        1表示商品转通用计划链接，其他值或不传表示转最优佣金率（含营销计划）链接
     **/
    public $dx;

    /**
        商品库账号ID
     **/
    public $manage_pub_id;


    public function getItemId() : string{
        return $this->item_id;
    }

    public function setItemId(string $itemId){
        $this->item_id = $itemId;
    }

    public function getSkuId() : int{
        return $this->sku_id;
    }

    public function setSkuId(int $skuId){
        $this->sku_id = $skuId;
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

    public function getExternalId() : string{
        return $this->external_id;
    }

    public function setExternalId(string $externalId){
        $this->external_id = $externalId;
    }

    public function getDx() : string{
        return $this->dx;
    }

    public function setDx(string $dx){
        $this->dx = $dx;
    }

    public function getManagePubId() : int{
        return $this->manage_pub_id;
    }

    public function setManagePubId(int $managePubId){
        $this->manage_pub_id = $managePubId;
    }


}

