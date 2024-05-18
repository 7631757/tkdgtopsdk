<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTbkScGeneralLinkConvertCouponInfoDTO {

    /**
        优惠券结束时间
     **/
    public $coupon_end_time;

    /**
        券ID
     **/
    public $activity_id;

    /**
        优惠券剩余数量
     **/
    public $coupon_remain_count;

    /**
        券面额
     **/
    public $coupon_amount;

    /**
        优惠券开始时间
     **/
    public $coupon_start_time;

    /**
        优惠券信息，满XX元减XX元
     **/
    public $coupon_desc;

    /**
         0-店铺 1-单品
     **/
    public $coupon_type;


    public function getCouponEndTime() : string{
        return $this->coupon_end_time;
    }

    public function setCouponEndTime(string $couponEndTime){
        $this->coupon_end_time = $couponEndTime;
    }

    public function getActivityId() : string{
        return $this->activity_id;
    }

    public function setActivityId(string $activityId){
        $this->activity_id = $activityId;
    }

    public function getCouponRemainCount() : int{
        return $this->coupon_remain_count;
    }

    public function setCouponRemainCount(int $couponRemainCount){
        $this->coupon_remain_count = $couponRemainCount;
    }

    public function getCouponAmount() : string{
        return $this->coupon_amount;
    }

    public function setCouponAmount(string $couponAmount){
        $this->coupon_amount = $couponAmount;
    }

    public function getCouponStartTime() : string{
        return $this->coupon_start_time;
    }

    public function setCouponStartTime(string $couponStartTime){
        $this->coupon_start_time = $couponStartTime;
    }

    public function getCouponDesc() : string{
        return $this->coupon_desc;
    }

    public function setCouponDesc(string $couponDesc){
        $this->coupon_desc = $couponDesc;
    }

    public function getCouponType() : int{
        return $this->coupon_type;
    }

    public function setCouponType(int $couponType){
        $this->coupon_type = $couponType;
    }


}

