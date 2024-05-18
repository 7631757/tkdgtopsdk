<?php
namespace Topsdk\Topapi\Ability411\Domain;

class TaobaoTbkScOrderDetailsGetPlatformSpecialShareInfoDTO {

    /**
        内容专项服务费比率
     **/
    public $content_tech_service_rate;

    /**
        预估内容专项服务费
     **/
    public $content_tech_service_pre_fee;

    /**
        结算内容专项服务费
     **/
    public $content_tech_service_fee;

    /**
        流量专项服务费比率（默认无，限定开放）
     **/
    public $traffic_tech_service_rate;

    /**
        预估流量专项服务费（默认无，限定开放）
     **/
    public $traffic_tech_service_pre_fee;

    /**
        结算流量专项服务费（默认无，限定开放）
     **/
    public $traffic_tech_service_fee;


    public function getContentTechServiceRate() : string{
        return $this->content_tech_service_rate;
    }

    public function setContentTechServiceRate(string $contentTechServiceRate){
        $this->content_tech_service_rate = $contentTechServiceRate;
    }

    public function getContentTechServicePreFee() : string{
        return $this->content_tech_service_pre_fee;
    }

    public function setContentTechServicePreFee(string $contentTechServicePreFee){
        $this->content_tech_service_pre_fee = $contentTechServicePreFee;
    }

    public function getContentTechServiceFee() : string{
        return $this->content_tech_service_fee;
    }

    public function setContentTechServiceFee(string $contentTechServiceFee){
        $this->content_tech_service_fee = $contentTechServiceFee;
    }

    public function getTrafficTechServiceRate() : string{
        return $this->traffic_tech_service_rate;
    }

    public function setTrafficTechServiceRate(string $trafficTechServiceRate){
        $this->traffic_tech_service_rate = $trafficTechServiceRate;
    }

    public function getTrafficTechServicePreFee() : string{
        return $this->traffic_tech_service_pre_fee;
    }

    public function setTrafficTechServicePreFee(string $trafficTechServicePreFee){
        $this->traffic_tech_service_pre_fee = $trafficTechServicePreFee;
    }

    public function getTrafficTechServiceFee() : string{
        return $this->traffic_tech_service_fee;
    }

    public function setTrafficTechServiceFee(string $trafficTechServiceFee){
        $this->traffic_tech_service_fee = $trafficTechServiceFee;
    }


}

