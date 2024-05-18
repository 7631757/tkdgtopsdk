<?php
namespace Topsdk\Topapi\Ability413\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkScNewuserOrderGetRequest {

    /**
        页大小，默认20，1~100
     **/
    private $pageSize;

    /**
        页码，默认1
     **/
    private $pageNo;

    /**
        mm_xxx_xxx_xxx的第三位
     **/
    private $adzoneId;

    /**
        mm_xxx_xxx_xxx的第二位
     **/
    private $siteId;

    /**
        活动id， 现有活动id包括： 2月手淘拉新：119013_2 3月手淘拉新：119013_3 4月手淘拉新：119013_4 拉手机支付宝新用户_赚赏金：200000_5
     **/
    private $activityId;

    /**
        结束时间，当活动为淘宝活动，表示最晚结束时间；当活动为支付宝活动，表示最晚绑定时间；当活动为天猫活动，表示最晚领取红包的时间
     **/
    private $endTime;

    /**
        开始时间，当活动为淘宝活动，表示最早注册时间；当活动为支付宝活动，表示最早绑定时间；当活动为天猫活动，表示最早领取红包时间
     **/
    private $startTime;


    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getPageNo() : int{
        return $this->pageNo;
    }

    public function setPageNo(int $pageNo){
        $this->pageNo = $pageNo;
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

    public function getActivityId() : string{
        return $this->activityId;
    }

    public function setActivityId(string $activityId){
        $this->activityId = $activityId;
    }

    public function getEndTime() : string{
        return $this->endTime;
    }

    public function setEndTime(string $endTime){
        $this->endTime = $endTime;
    }

    public function getStartTime() : string{
        return $this->startTime;
    }

    public function setStartTime(string $startTime){
        $this->startTime = $startTime;
    }


    public function getApiName() : string {
        return "taobao.tbk.sc.newuser.order.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->adzoneId)) {
            $requestParam["adzone_id"] = TopUtil::convertBasic($this->adzoneId);
        }

        if (!TopUtil::checkEmpty($this->siteId)) {
            $requestParam["site_id"] = TopUtil::convertBasic($this->siteId);
        }

        if (!TopUtil::checkEmpty($this->activityId)) {
            $requestParam["activity_id"] = TopUtil::convertBasic($this->activityId);
        }

        if (!TopUtil::checkEmpty($this->endTime)) {
            $requestParam["end_time"] = TopUtil::convertBasic($this->endTime);
        }

        if (!TopUtil::checkEmpty($this->startTime)) {
            $requestParam["start_time"] = TopUtil::convertBasic($this->startTime);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

