<?php
namespace Topsdk\Topapi\Ability427\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkScAdzoneCreateRequest {

    /**
        网站ID
     **/
    private $siteId;

    /**
        广告位名称，最大长度64字符
     **/
    private $adzoneName;


    public function getSiteId() : int{
        return $this->siteId;
    }

    public function setSiteId(int $siteId){
        $this->siteId = $siteId;
    }

    public function getAdzoneName() : string{
        return $this->adzoneName;
    }

    public function setAdzoneName(string $adzoneName){
        $this->adzoneName = $adzoneName;
    }


    public function getApiName() : string {
        return "taobao.tbk.sc.adzone.create";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->siteId)) {
            $requestParam["site_id"] = TopUtil::convertBasic($this->siteId);
        }

        if (!TopUtil::checkEmpty($this->adzoneName)) {
            $requestParam["adzone_name"] = TopUtil::convertBasic($this->adzoneName);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

