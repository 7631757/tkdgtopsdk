<?php
namespace Topsdk\Topapi\Ability2553\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkScActivityInfoGetRequest {

    /**
        官方活动会场ID，从淘宝客后台“我要推广-活动推广”中获取
     **/
    private $activityMaterialId;

    /**
        mm_xxx_xxx_xxx的第3段数字
     **/
    private $adzoneId;

    /**
        mm_xxx_xxx_xxx的第2段数字
     **/
    private $siteId;

    /**
        渠道关系id
     **/
    private $relationId;

    /**
        自定义输入串，英文和数字组成，长度不能大于12个字符，区分不同的推广渠道
     **/
    private $unionId;


    public function getActivityMaterialId() : string{
        return $this->activityMaterialId;
    }

    public function setActivityMaterialId(string $activityMaterialId){
        $this->activityMaterialId = $activityMaterialId;
    }

    public function getAdzoneId() : int{
        return $this->adzoneId;
    }

    public function setAdzoneId(int $adzoneId){
        $this->adzoneId = $adzoneId;
    }

    public function getSiteId() : int{
        return $this->siteId;
    }

    public function setSiteId(int $siteId){
        $this->siteId = $siteId;
    }

    public function getRelationId() : int{
        return $this->relationId;
    }

    public function setRelationId(int $relationId){
        $this->relationId = $relationId;
    }

    public function getUnionId() : string{
        return $this->unionId;
    }

    public function setUnionId(string $unionId){
        $this->unionId = $unionId;
    }


    public function getApiName() : string {
        return "taobao.tbk.sc.activity.info.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->activityMaterialId)) {
            $requestParam["activity_material_id"] = TopUtil::convertBasic($this->activityMaterialId);
        }

        if (!TopUtil::checkEmpty($this->adzoneId)) {
            $requestParam["adzone_id"] = TopUtil::convertBasic($this->adzoneId);
        }

        if (!TopUtil::checkEmpty($this->siteId)) {
            $requestParam["site_id"] = TopUtil::convertBasic($this->siteId);
        }

        if (!TopUtil::checkEmpty($this->relationId)) {
            $requestParam["relation_id"] = TopUtil::convertBasic($this->relationId);
        }

        if (!TopUtil::checkEmpty($this->unionId)) {
            $requestParam["union_id"] = TopUtil::convertBasic($this->unionId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

