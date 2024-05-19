<?php
namespace Topsdk\Topapi\Ability424\Domain;

class TaobaoTbkScGroupchatGetGrouplist {

    /**
        totalUserCount
     **/
    public $total_user_count;

    /**
        groupId
     **/
    public $group_id;

    /**
        title
     **/
    public $title;

    /**
        subGroupNum
     **/
    public $sub_group_num;

    /**
        groupUrl
     **/
    public $group_url;


    public function getTotalUserCount() : int{
        return $this->total_user_count;
    }

    public function setTotalUserCount(int $totalUserCount){
        $this->total_user_count = $totalUserCount;
    }

    public function getGroupId() : string{
        return $this->group_id;
    }

    public function setGroupId(string $groupId){
        $this->group_id = $groupId;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getSubGroupNum() : int{
        return $this->sub_group_num;
    }

    public function setSubGroupNum(int $subGroupNum){
        $this->sub_group_num = $subGroupNum;
    }

    public function getGroupUrl() : string{
        return $this->group_url;
    }

    public function setGroupUrl(string $groupUrl){
        $this->group_url = $groupUrl;
    }


}

