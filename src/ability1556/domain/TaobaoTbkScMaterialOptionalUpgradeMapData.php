<?php
namespace Topsdk\Topapi\Ability1556\Domain;

class TaobaoTbkScMaterialOptionalUpgradeMapData {

    /**
        商品信息-淘宝客新商品id；使用说明参考《淘宝客新商品ID升级》白皮书：https://www.yuque.com/taobaolianmengguanfangxiaoer/zmig94/tfyt0pahmlpzu2ud
     **/
    public $item_id;

    /**
        价格促销信息
     **/
    public $price_promotion_info;

    /**
        淘客推广信息
     **/
    public $publish_info;

    /**
        商品基础信息
     **/
    public $item_basic_info;

    /**
        天猫榜单信息
     **/
    public $tmall_rank_info;

    /**
        预售信息
     **/
    public $presale_info;

    /**
        商品库范围信息
     **/
    public $scope_info;

    /**
        线报内容
     **/
    public $mgc_info;

    /**
        物料评估-匹配分
     **/
    public $match_score;

    /**
        物料评估-收益分
     **/
    public $commi_score;

    /**
        根据入参工具服务商账号信息生成的新商品ID
     **/
    public $isv_mktid;


    public function getItemId() : string{
        return $this->item_id;
    }

    public function setItemId(string $itemId){
        $this->item_id = $itemId;
    }

    public function getPricePromotionInfo() : TaobaoTbkScMaterialOptionalUpgradePromotionInfoMapData{
        return $this->price_promotion_info;
    }

    public function setPricePromotionInfo(TaobaoTbkScMaterialOptionalUpgradePromotionInfoMapData $pricePromotionInfo){
        $this->price_promotion_info = $pricePromotionInfo;
    }

    public function getPublishInfo() : TaobaoTbkScMaterialOptionalUpgradePublishInfo{
        return $this->publish_info;
    }

    public function setPublishInfo(TaobaoTbkScMaterialOptionalUpgradePublishInfo $publishInfo){
        $this->publish_info = $publishInfo;
    }

    public function getItemBasicInfo() : TaobaoTbkScMaterialOptionalUpgradeBasicMapData{
        return $this->item_basic_info;
    }

    public function setItemBasicInfo(TaobaoTbkScMaterialOptionalUpgradeBasicMapData $itemBasicInfo){
        $this->item_basic_info = $itemBasicInfo;
    }

    public function getTmallRankInfo() : TaobaoTbkScMaterialOptionalUpgradeTmallRankInfo{
        return $this->tmall_rank_info;
    }

    public function setTmallRankInfo(TaobaoTbkScMaterialOptionalUpgradeTmallRankInfo $tmallRankInfo){
        $this->tmall_rank_info = $tmallRankInfo;
    }

    public function getPresaleInfo() : TaobaoTbkScMaterialOptionalUpgradePresaleInfo{
        return $this->presale_info;
    }

    public function setPresaleInfo(TaobaoTbkScMaterialOptionalUpgradePresaleInfo $presaleInfo){
        $this->presale_info = $presaleInfo;
    }

    public function getScopeInfo() : TaobaoTbkScMaterialOptionalUpgradeScopeInfo{
        return $this->scope_info;
    }

    public function setScopeInfo(TaobaoTbkScMaterialOptionalUpgradeScopeInfo $scopeInfo){
        $this->scope_info = $scopeInfo;
    }

    public function getMgcInfo() : TaobaoTbkScMaterialOptionalUpgradeMgcInfo{
        return $this->mgc_info;
    }

    public function setMgcInfo(TaobaoTbkScMaterialOptionalUpgradeMgcInfo $mgcInfo){
        $this->mgc_info = $mgcInfo;
    }

    public function getMatchScore() : string{
        return $this->match_score;
    }

    public function setMatchScore(string $matchScore){
        $this->match_score = $matchScore;
    }

    public function getCommiScore() : string{
        return $this->commi_score;
    }

    public function setCommiScore(string $commiScore){
        $this->commi_score = $commiScore;
    }

    public function getIsvMktid() : string{
        return $this->isv_mktid;
    }

    public function setIsvMktid(string $isvMktid){
        $this->isv_mktid = $isvMktid;
    }


}

