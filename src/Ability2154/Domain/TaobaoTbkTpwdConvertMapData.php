<?php
namespace Topsdk\Topapi\Ability2154\Domain;

class TaobaoTbkTpwdConvertMapData {

    /**
        商品Id
     **/
    public $num_iid;

    /**
        商品淘客转链
     **/
    public $click_url;

    /**
        店铺卖家ID
     **/
    public $seller_id;

    /**
        入参淘口令对应原始链接
     **/
    public $origin_url;

    /**
        入参淘口令推广链接中的pid，如果不属于当前调用的推广者则展示“0”
     **/
    public $origin_pid;

    /**
        1-动态ID转链场景，2-消费者比价场景，3-商品库导购场景
     **/
    public $biz_scene_id;

    /**
        短口令
     **/
    public $model;

    /**
        长口令
     **/
    public $password;

    /**
        链接类型。1-单品，2-店铺，3-活动，0-其它
     **/
    public $url_type;

    /**
        短链接
     **/
    public $short_url;


    public function getNumIid() : string{
        return $this->num_iid;
    }

    public function setNumIid(string $numIid){
        $this->num_iid = $numIid;
    }

    public function getClickUrl() : string{
        return $this->click_url;
    }

    public function setClickUrl(string $clickUrl){
        $this->click_url = $clickUrl;
    }

    public function getSellerId() : string{
        return $this->seller_id;
    }

    public function setSellerId(string $sellerId){
        $this->seller_id = $sellerId;
    }

    public function getOriginUrl() : string{
        return $this->origin_url;
    }

    public function setOriginUrl(string $originUrl){
        $this->origin_url = $originUrl;
    }

    public function getOriginPid() : string{
        return $this->origin_pid;
    }

    public function setOriginPid(string $originPid){
        $this->origin_pid = $originPid;
    }

    public function getBizSceneId() : string{
        return $this->biz_scene_id;
    }

    public function setBizSceneId(string $bizSceneId){
        $this->biz_scene_id = $bizSceneId;
    }

    public function getModel() : string{
        return $this->model;
    }

    public function setModel(string $model){
        $this->model = $model;
    }

    public function getPassword() : string{
        return $this->password;
    }

    public function setPassword(string $password){
        $this->password = $password;
    }

    public function getUrlType() : string{
        return $this->url_type;
    }

    public function setUrlType(string $urlType){
        $this->url_type = $urlType;
    }

    public function getShortUrl() : string{
        return $this->short_url;
    }

    public function setShortUrl(string $shortUrl){
        $this->short_url = $shortUrl;
    }


}

