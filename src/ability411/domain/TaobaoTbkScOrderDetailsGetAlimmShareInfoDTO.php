<?php
namespace Topsdk\Topapi\Ability411\Domain;

class TaobaoTbkScOrderDetailsGetAlimmShareInfoDTO {

    /**
        技术服务费比率
     **/
    public $alimm_tech_service_rate;

    /**
        预估技术服务费
     **/
    public $alimm_tech_service_pre_fee;

    /**
        结算技术服务费
     **/
    public $alimm_tech_service_fee;

    /**
        渠道专项服务费比率
     **/
    public $alimm_agent_service_rate;

    /**
        预估渠道专项服务费
     **/
    public $alimm_agent_service_pre_fee;

    /**
        结算渠道专项服务费
     **/
    public $alimm_agent_service_fee;


    public function getAlimmTechServiceRate() : string{
        return $this->alimm_tech_service_rate;
    }

    public function setAlimmTechServiceRate(string $alimmTechServiceRate){
        $this->alimm_tech_service_rate = $alimmTechServiceRate;
    }

    public function getAlimmTechServicePreFee() : string{
        return $this->alimm_tech_service_pre_fee;
    }

    public function setAlimmTechServicePreFee(string $alimmTechServicePreFee){
        $this->alimm_tech_service_pre_fee = $alimmTechServicePreFee;
    }

    public function getAlimmTechServiceFee() : string{
        return $this->alimm_tech_service_fee;
    }

    public function setAlimmTechServiceFee(string $alimmTechServiceFee){
        $this->alimm_tech_service_fee = $alimmTechServiceFee;
    }

    public function getAlimmAgentServiceRate() : string{
        return $this->alimm_agent_service_rate;
    }

    public function setAlimmAgentServiceRate(string $alimmAgentServiceRate){
        $this->alimm_agent_service_rate = $alimmAgentServiceRate;
    }

    public function getAlimmAgentServicePreFee() : string{
        return $this->alimm_agent_service_pre_fee;
    }

    public function setAlimmAgentServicePreFee(string $alimmAgentServicePreFee){
        $this->alimm_agent_service_pre_fee = $alimmAgentServicePreFee;
    }

    public function getAlimmAgentServiceFee() : string{
        return $this->alimm_agent_service_fee;
    }

    public function setAlimmAgentServiceFee(string $alimmAgentServiceFee){
        $this->alimm_agent_service_fee = $alimmAgentServiceFee;
    }


}

