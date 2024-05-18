<?php
namespace Topsdk\Topapi\Ability2153\Domain;

class TaobaoTbkScMaterialRecommendMapData {

    /**
        商品信息-淘宝客新商品id；使用说明参考《淘宝客新商品ID升级》白皮书：https://www.yuque.com/taobaolianmengguanfangxiaoer/zmig94/tfyt0pahmlpzu2ud
     **/
    public $item_id;

    /**
        商品基础信息
     **/
    public $item_basic_info;

    /**
        价格促销信息
     **/
    public $price_promotion_info;

    /**
        淘客推广信息
     **/
    public $publish_info;

    /**
        天猫榜单信息
     **/
    public $tmall_rank_info;

    /**
        预售信息
     **/
    public $presale_info;

    /**
        选品库信息
     **/
    public $favorites_info;

    /**
        前N件佣金信息-前N件佣金生效或预热时透出以下字段
     **/
    public $topn_info;

    /**
        商品库范围信息
     **/
    public $scope_info;

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

    public function getItemBasicInfo() : TaobaoTbkScMaterialRecommendBasicMapData{
        return $this->item_basic_info;
    }

    public function setItemBasicInfo(TaobaoTbkScMaterialRecommendBasicMapData $itemBasicInfo){
        $this->item_basic_info = $itemBasicInfo;
    }

    public function getPricePromotionInfo() : TaobaoTbkScMaterialRecommendPromotionInfoMapData{
        return $this->price_promotion_info;
    }

    public function setPricePromotionInfo(TaobaoTbkScMaterialRecommendPromotionInfoMapData $pricePromotionInfo){
        $this->price_promotion_info = $pricePromotionInfo;
    }

    public function getPublishInfo() : TaobaoTbkScMaterialRecommendPublishInfo{
        return $this->publish_info;
    }

    public function setPublishInfo(TaobaoTbkScMaterialRecommendPublishInfo $publishInfo){
        $this->publish_info = $publishInfo;
    }

    public function getTmallRankInfo() : TaobaoTbkScMaterialRecommendTmallRankInfo{
        return $this->tmall_rank_info;
    }

    public function setTmallRankInfo(TaobaoTbkScMaterialRecommendTmallRankInfo $tmallRankInfo){
        $this->tmall_rank_info = $tmallRankInfo;
    }

    public function getPresaleInfo() : TaobaoTbkScMaterialRecommendPresaleInfo{
        return $this->presale_info;
    }

    public function setPresaleInfo(TaobaoTbkScMaterialRecommendPresaleInfo $presaleInfo){
        $this->presale_info = $presaleInfo;
    }

    public function getFavoritesInfo() : TaobaoTbkScMaterialRecommendFavoritesInfo{
        return $this->favorites_info;
    }

    public function setFavoritesInfo(TaobaoTbkScMaterialRecommendFavoritesInfo $favoritesInfo){
        $this->favorites_info = $favoritesInfo;
    }

    public function getTopnInfo() : TaobaoTbkScMaterialRecommendTopNInfoDTO{
        return $this->topn_info;
    }

    public function setTopnInfo(TaobaoTbkScMaterialRecommendTopNInfoDTO $topnInfo){
        $this->topn_info = $topnInfo;
    }

    public function getScopeInfo() : TaobaoTbkScMaterialRecommendScopeInfo{
        return $this->scope_info;
    }

    public function setScopeInfo(TaobaoTbkScMaterialRecommendScopeInfo $scopeInfo){
        $this->scope_info = $scopeInfo;
    }

    public function getIsvMktid() : string{
        return $this->isv_mktid;
    }

    public function setIsvMktid(string $isvMktid){
        $this->isv_mktid = $isvMktid;
    }


}

