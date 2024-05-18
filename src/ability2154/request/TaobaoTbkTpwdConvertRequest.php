<?php
namespace Topsdk\Topapi\Ability2154\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkTpwdConvertRequest {

    /**
        需要解析的淘口令
     **/
    private $passwordContent;

    /**
        广告位ID
     **/
    private $adzoneId;

    /**
        1表示商品转通用计划链接，其他值或不传表示优先转营销计划链接
     **/
    private $dx;

    /**
        会员人群ID，转链后会自动带上，可用于统计人群推广效果
     **/
    private $ucrowdId;

    /**
        渠道id
     **/
    private $relationId;


    public function getPasswordContent() : string{
        return $this->passwordContent;
    }

    public function setPasswordContent(string $passwordContent){
        $this->passwordContent = $passwordContent;
    }

    public function getAdzoneId() : int{
        return $this->adzoneId;
    }

    public function setAdzoneId(int $adzoneId){
        $this->adzoneId = $adzoneId;
    }

    public function getDx() : string{
        return $this->dx;
    }

    public function setDx(string $dx){
        $this->dx = $dx;
    }

    public function getUcrowdId() : int{
        return $this->ucrowdId;
    }

    public function setUcrowdId(int $ucrowdId){
        $this->ucrowdId = $ucrowdId;
    }

    public function getRelationId() : string{
        return $this->relationId;
    }

    public function setRelationId(string $relationId){
        $this->relationId = $relationId;
    }


    public function getApiName() : string {
        return "taobao.tbk.tpwd.convert";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->passwordContent)) {
            $requestParam["password_content"] = TopUtil::convertBasic($this->passwordContent);
        }

        if (!TopUtil::checkEmpty($this->adzoneId)) {
            $requestParam["adzone_id"] = TopUtil::convertBasic($this->adzoneId);
        }

        if (!TopUtil::checkEmpty($this->dx)) {
            $requestParam["dx"] = TopUtil::convertBasic($this->dx);
        }

        if (!TopUtil::checkEmpty($this->ucrowdId)) {
            $requestParam["ucrowd_id"] = TopUtil::convertBasic($this->ucrowdId);
        }

        if (!TopUtil::checkEmpty($this->relationId)) {
            $requestParam["relation_id"] = TopUtil::convertBasic($this->relationId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

