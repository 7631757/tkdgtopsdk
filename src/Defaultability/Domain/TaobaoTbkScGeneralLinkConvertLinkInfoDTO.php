<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTbkScGeneralLinkConvertLinkInfoDTO {

    /**
        二合一长链接
     **/
    public $coupon_long_url;

    /**
        1—单品 2—店铺 3—会场 4-承接开放 5-优惠券 6-直播间 7-淘积木页
     **/
    public $material_type;

    /**
        CPS链接长链
     **/
    public $cps_long_url;

    /**
        CPS链接的短口令
     **/
    public $cps_short_tpwd;

    /**
        1-联盟口令，2-主站口令。入参物料不为淘口令时，此字段返回null
     **/
    public $tk_biz_type;

    /**
        二合一链接的短口令
     **/
    public $coupon_short_tpwd;

    /**
        CPS链接短链
     **/
    public $cps_short_url;

    /**
        二合一链接长链
     **/
    public $coupon_short_url;

    /**
        二合一链接的长口令
     **/
    public $coupon_full_tpwd;

    /**
        CPS链接的长口令
     **/
    public $cps_full_tpwd;

    /**
        根据入参工具服务商账号信息生成的新商品ID
     **/
    public $isv_mktid;


    public function getCouponLongUrl() : string{
        return $this->coupon_long_url;
    }

    public function setCouponLongUrl(string $couponLongUrl){
        $this->coupon_long_url = $couponLongUrl;
    }

    public function getMaterialType() : int{
        return $this->material_type;
    }

    public function setMaterialType(int $materialType){
        $this->material_type = $materialType;
    }

    public function getCpsLongUrl() : string{
        return $this->cps_long_url;
    }

    public function setCpsLongUrl(string $cpsLongUrl){
        $this->cps_long_url = $cpsLongUrl;
    }

    public function getCpsShortTpwd() : string{
        return $this->cps_short_tpwd;
    }

    public function setCpsShortTpwd(string $cpsShortTpwd){
        $this->cps_short_tpwd = $cpsShortTpwd;
    }

    public function getTkBizType() : int{
        return $this->tk_biz_type;
    }

    public function setTkBizType(int $tkBizType){
        $this->tk_biz_type = $tkBizType;
    }

    public function getCouponShortTpwd() : string{
        return $this->coupon_short_tpwd;
    }

    public function setCouponShortTpwd(string $couponShortTpwd){
        $this->coupon_short_tpwd = $couponShortTpwd;
    }

    public function getCpsShortUrl() : string{
        return $this->cps_short_url;
    }

    public function setCpsShortUrl(string $cpsShortUrl){
        $this->cps_short_url = $cpsShortUrl;
    }

    public function getCouponShortUrl() : string{
        return $this->coupon_short_url;
    }

    public function setCouponShortUrl(string $couponShortUrl){
        $this->coupon_short_url = $couponShortUrl;
    }

    public function getCouponFullTpwd() : string{
        return $this->coupon_full_tpwd;
    }

    public function setCouponFullTpwd(string $couponFullTpwd){
        $this->coupon_full_tpwd = $couponFullTpwd;
    }

    public function getCpsFullTpwd() : string{
        return $this->cps_full_tpwd;
    }

    public function setCpsFullTpwd(string $cpsFullTpwd){
        $this->cps_full_tpwd = $cpsFullTpwd;
    }

    public function getIsvMktid() : string{
        return $this->isv_mktid;
    }

    public function setIsvMktid(string $isvMktid){
        $this->isv_mktid = $isvMktid;
    }


}

