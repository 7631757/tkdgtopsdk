<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTbkScGeneralLinkConvertItemMultiCouponPromotionInfoDTO {

    /**
        优惠名称
     **/
    public $coupon_title;

    /**
        优惠券信息，满XX元减XX元，满x件减y元
     **/
    public $coupon_desc;

    /**
        优惠金额。单位元
     **/
    public $coupoon_fee;

    /**
        优惠开始时间
     **/
    public $coupon_start_time;

    /**
        优惠结束时间
     **/
    public $coupon_end_time;

    /**
        优惠ID
     **/
    public $activity_id;

    /**
        优惠剩余数量
     **/
    public $coupon_remain_count;


    public function getCouponTitle() : string{
        return $this->coupon_title;
    }

    public function setCouponTitle(string $couponTitle){
        $this->coupon_title = $couponTitle;
    }

    public function getCouponDesc() : string{
        return $this->coupon_desc;
    }

    public function setCouponDesc(string $couponDesc){
        $this->coupon_desc = $couponDesc;
    }

    public function getCoupoonFee() : string{
        return $this->coupoon_fee;
    }

    public function setCoupoonFee(string $coupoonFee){
        $this->coupoon_fee = $coupoonFee;
    }

    public function getCouponStartTime() : string{
        return $this->coupon_start_time;
    }

    public function setCouponStartTime(string $couponStartTime){
        $this->coupon_start_time = $couponStartTime;
    }

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


}

