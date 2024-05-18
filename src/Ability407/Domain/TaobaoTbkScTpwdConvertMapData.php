<?php
namespace Topsdk\Topapi\Ability407\Domain;

class TaobaoTbkScTpwdConvertMapData {

    /**
        商品Id
     **/
    public $num_iid;

    /**
        商品淘客转链链接
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
        转链后的短口令。非苹果ios14以上版本的设备（即其他ios版本、Android系统等），可以用此淘口令正常在复制到手淘打开
     **/
    public $model;

    /**
        转链后的长口令。针对苹果ios14及以上版本的苹果设备，手淘将按照示例值信息格式读取淘口令。如需更改淘口令内文案、url等内容，请务必先验证更改后的淘口令在手淘可被识别打开！
     **/
    public $password;

    /**
        转链后的短链接
     **/
    public $short_url;

    /**
        原链接类型：1-单品，2-店铺，3-活动，0-其它
     **/
    public $url_type;

    /**
        根据入参工具服务商账号信息生成的新商品ID
     **/
    public $isv_mktid;


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

    public function getShortUrl() : string{
        return $this->short_url;
    }

    public function setShortUrl(string $shortUrl){
        $this->short_url = $shortUrl;
    }

    public function getUrlType() : string{
        return $this->url_type;
    }

    public function setUrlType(string $urlType){
        $this->url_type = $urlType;
    }

    public function getIsvMktid() : string{
        return $this->isv_mktid;
    }

    public function setIsvMktid(string $isvMktid){
        $this->isv_mktid = $isvMktid;
    }


}

