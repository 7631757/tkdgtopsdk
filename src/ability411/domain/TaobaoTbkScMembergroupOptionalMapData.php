<?php
namespace Topsdk\Topapi\Ability411\Domain;

class TaobaoTbkScMembergroupOptionalMapData {

    /**
        组ID
     **/
    public $member_group_id;

    /**
        组内的成员ID
     **/
    public $tb_num_ids;

    /**
        创建时间
     **/
    public $create_time;

    /**
        更新时间
     **/
    public $update_time;


    public function getMemberGroupId() : int{
        return $this->member_group_id;
    }

    public function setMemberGroupId(int $memberGroupId){
        $this->member_group_id = $memberGroupId;
    }

    public function getTbNumIds() : string{
        return $this->tb_num_ids;
    }

    public function setTbNumIds(string $tbNumIds){
        $this->tb_num_ids = $tbNumIds;
    }

    public function getCreateTime() : string{
        return $this->create_time;
    }

    public function setCreateTime(string $createTime){
        $this->create_time = $createTime;
    }

    public function getUpdateTime() : string{
        return $this->update_time;
    }

    public function setUpdateTime(string $updateTime){
        $this->update_time = $updateTime;
    }


}

