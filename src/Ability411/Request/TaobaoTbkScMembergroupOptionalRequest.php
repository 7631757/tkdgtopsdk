<?php
namespace Topsdk\Topapi\Ability411\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkScMembergroupOptionalRequest {

    /**
        member组id
     **/
    private $memberGroupId;

    /**
        淘宝数字id
     **/
    private $tbNumIds;


    public function getMemberGroupId() : int{
        return $this->memberGroupId;
    }

    public function setMemberGroupId(int $memberGroupId){
        $this->memberGroupId = $memberGroupId;
    }

    public function getTbNumIds() : string{
        return $this->tbNumIds;
    }

    public function setTbNumIds(string $tbNumIds){
        $this->tbNumIds = $tbNumIds;
    }


    public function getApiName() : string {
        return "taobao.tbk.sc.membergroup.optional";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->memberGroupId)) {
            $requestParam["member_group_id"] = TopUtil::convertBasic($this->memberGroupId);
        }

        if (!TopUtil::checkEmpty($this->tbNumIds)) {
            $requestParam["tb_num_ids"] = TopUtil::convertBasic($this->tbNumIds);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

