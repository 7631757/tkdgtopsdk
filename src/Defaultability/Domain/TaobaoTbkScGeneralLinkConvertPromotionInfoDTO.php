<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTbkScGeneralLinkConvertPromotionInfoDTO {

    /**
        商品收入比率(%)：商品佣金比率+补贴比率。同物料类接口income_rate
     **/
    public $commission_rate;

    /**
        佣金类型。MKT表示营销计划，SP表示定向计划，COMMON表示通用计划，ZX表示自选计划
     **/
    public $commission_type;

    /**
        多件价需拍件数
     **/
    public $multiple_items_prices_count;


    public function getCommissionRate() : string{
        return $this->commission_rate;
    }

    public function setCommissionRate(string $commissionRate){
        $this->commission_rate = $commissionRate;
    }

    public function getCommissionType() : string{
        return $this->commission_type;
    }

    public function setCommissionType(string $commissionType){
        $this->commission_type = $commissionType;
    }

    public function getMultipleItemsPricesCount() : int{
        return $this->multiple_items_prices_count;
    }

    public function setMultipleItemsPricesCount(int $multipleItemsPricesCount){
        $this->multiple_items_prices_count = $multipleItemsPricesCount;
    }


}

