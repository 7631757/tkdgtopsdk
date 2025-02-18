<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkScGeneralLinkParseRequest {

    /**
        渠道管理ID（如是主站选品推广场景，必须入参该字段，且bizSceneId字段需入参2-消费者比价场景，否则二次转链失败）
     **/
    private $relationId;

    /**
        推广位id，mm_xx_xx_xx pid三段式中的第三段
     **/
    private $adzoneId;

    /**
        链接/口令转链
     **/
    private $materialDto;

    /**
        有origin_pid使用场景需入参
     **/
    private $fields;


    public function getRelationId() : string{
        return $this->relationId;
    }

    public function setRelationId(string $relationId){
        $this->relationId = $relationId;
    }

    public function getAdzoneId() : int{
        return $this->adzoneId;
    }

    public function setAdzoneId(int $adzoneId){
        $this->adzoneId = $adzoneId;
    }

    public function getMaterialDto() : array{
        return $this->materialDto;
    }

    public function setMaterialDto(array $materialDto){
        $this->materialDto = $materialDto;
    }

    public function getFields() : string{
        return $this->fields;
    }

    public function setFields(string $fields){
        $this->fields = $fields;
    }


    public function getApiName() : string {
        return "taobao.tbk.sc.general.link.parse";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->relationId)) {
            $requestParam["relation_id"] = TopUtil::convertBasic($this->relationId);
        }

        if (!TopUtil::checkEmpty($this->adzoneId)) {
            $requestParam["adzone_id"] = TopUtil::convertBasic($this->adzoneId);
        }

        if (!TopUtil::checkEmpty($this->materialDto)) {
            $requestParam["material_dto"] = TopUtil::convertStructList($this->materialDto);
        }

        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasic($this->fields);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

