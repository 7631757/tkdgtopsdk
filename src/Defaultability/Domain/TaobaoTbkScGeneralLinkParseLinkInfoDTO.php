<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTbkScGeneralLinkParseLinkInfoDTO {

    /**
        1—商品 2—店铺 3—会场 4-承接开放 5-优惠券 6-直播间
     **/
    public $material_type;

    /**
        入参口令/链接对应的原链接
     **/
    public $tpwd_origin_url;

    /**
        物料ID，需根据material_type判断物料类型， 可能为商品ID、卖家ID、会场ID
     **/
    public $material_id;

    /**
        1-联盟口令，2-主站口令。入参物料不为淘口令时，此字段返回null
     **/
    public $tk_biz_type;

    /**
        根据入参工具服务商账号信息生成的下一跳新商品ID
     **/
    public $isv_mktid;

    /**
        入参推广链接中的pid，需配合入参fields使用，如果不属于当前调用的推广者，则不返回
     **/
    public $origin_pid;


    public function getMaterialType() : int{
        return $this->material_type;
    }

    public function setMaterialType(int $materialType){
        $this->material_type = $materialType;
    }

    public function getTpwdOriginUrl() : string{
        return $this->tpwd_origin_url;
    }

    public function setTpwdOriginUrl(string $tpwdOriginUrl){
        $this->tpwd_origin_url = $tpwdOriginUrl;
    }

    public function getMaterialId() : string{
        return $this->material_id;
    }

    public function setMaterialId(string $materialId){
        $this->material_id = $materialId;
    }

    public function getTkBizType() : int{
        return $this->tk_biz_type;
    }

    public function setTkBizType(int $tkBizType){
        $this->tk_biz_type = $tkBizType;
    }

    public function getIsvMktid() : string{
        return $this->isv_mktid;
    }

    public function setIsvMktid(string $isvMktid){
        $this->isv_mktid = $isvMktid;
    }

    public function getOriginPid() : string{
        return $this->origin_pid;
    }

    public function setOriginPid(string $originPid){
        $this->origin_pid = $originPid;
    }


}

