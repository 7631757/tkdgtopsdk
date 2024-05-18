<?php
namespace Topsdk\Topapi\Ability411\Domain;

class TaobaoTbkScOrderDetailsGetSubsidyDetailDTO {

    /**
        该笔订单包含的补贴类型
     **/
    public $subsidy_type;

    /**
        补贴比率
     **/
    public $subsidy_rate;

    /**
        对应补贴类型的补贴金额
     **/
    public $subsidy_fee;

    /**
        单笔订单补贴上限。对应补贴类型的单笔订单补贴上限
     **/
    public $subsidy_upper_limit;

    /**
        补贴分成比率
     **/
    public $subsidy_share_rate;


    public function getSubsidyType() : string{
        return $this->subsidy_type;
    }

    public function setSubsidyType(string $subsidyType){
        $this->subsidy_type = $subsidyType;
    }

    public function getSubsidyRate() : string{
        return $this->subsidy_rate;
    }

    public function setSubsidyRate(string $subsidyRate){
        $this->subsidy_rate = $subsidyRate;
    }

    public function getSubsidyFee() : string{
        return $this->subsidy_fee;
    }

    public function setSubsidyFee(string $subsidyFee){
        $this->subsidy_fee = $subsidyFee;
    }

    public function getSubsidyUpperLimit() : string{
        return $this->subsidy_upper_limit;
    }

    public function setSubsidyUpperLimit(string $subsidyUpperLimit){
        $this->subsidy_upper_limit = $subsidyUpperLimit;
    }

    public function getSubsidyShareRate() : string{
        return $this->subsidy_share_rate;
    }

    public function setSubsidyShareRate(string $subsidyShareRate){
        $this->subsidy_share_rate = $subsidyShareRate;
    }


}

