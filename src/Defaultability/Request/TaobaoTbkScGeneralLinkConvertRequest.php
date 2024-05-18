<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoTbkScGeneralLinkConvertTargetItemDTO;

class TaobaoTbkScGeneralLinkConvertRequest {

    /**
        1-动态ID转链场景，2-消费者比价场景，4-
     **/
    private $bizSceneId;

    /**
        1-自购省，2-推广赚（代理模式专属ID，代理模式必填，其它模式不用填写本字段）
     **/
    private $promotionType;

    /**
        物料列表，可以为url或淘口令,多个时使用英文逗号拼接传入
     **/
    private $materialList;

    /**
        渠道管理ID（如是主站选品推广场景，必须入参该字段，且bizSceneId字段需入参2-消费者比价场景，否则二次转链失败）
     **/
    private $relationId;

    /**
        推广位id，mm_xx_xx_xx pid三段式中的第三段
     **/
    private $adzoneId;

    /**
        卖家ID列表,多个时使用英文逗号拼接传入
     **/
    private $sellerIdList;

    /**
        推广位id，mm_xx_xx_xx pid三段式中的第二段
     **/
    private $siteId;

    /**
        商品ID列表,多个时使用英文逗号拼接传入
     **/
    private $itemIdList;

    /**
        会场ID列表,多个时使用英文逗号拼接传入
     **/
    private $pageIdList;

    /**
        会场页面内定坑商品
     **/
    private $targetItem;

    /**
        商品转链
     **/
    private $itemDto;

    /**
        会场页面转链
     **/
    private $pageDto;

    /**
        店铺转链
     **/
    private $shopDto;

    /**
        链接/口令转链
     **/
    private $materialDto;

    /**
        会员运营id
     **/
    private $specialId;


    public function getBizSceneId() : string{
        return $this->bizSceneId;
    }

    public function setBizSceneId(string $bizSceneId){
        $this->bizSceneId = $bizSceneId;
    }

    public function getPromotionType() : string{
        return $this->promotionType;
    }

    public function setPromotionType(string $promotionType){
        $this->promotionType = $promotionType;
    }

    public function getMaterialList() : array{
        return $this->materialList;
    }

    public function setMaterialList(array $materialList){
        $this->materialList = $materialList;
    }

    public function getRelationId() : string{
        return $this->relationId;
    }

    public function setRelationId(string $relationId){
        $this->relationId = $relationId;
    }

    public function getAdzoneId() : int{
        return $this->adzoneId;
    }

    public function setAdzoneId(int $adzoneId){
        $this->adzoneId = $adzoneId;
    }

    public function getSellerIdList() : array{
        return $this->sellerIdList;
    }

    public function setSellerIdList(array $sellerIdList){
        $this->sellerIdList = $sellerIdList;
    }

    public function getSiteId() : int{
        return $this->siteId;
    }

    public function setSiteId(int $siteId){
        $this->siteId = $siteId;
    }

    public function getItemIdList() : array{
        return $this->itemIdList;
    }

    public function setItemIdList(array $itemIdList){
        $this->itemIdList = $itemIdList;
    }

    public function getPageIdList() : array{
        return $this->pageIdList;
    }

    public function setPageIdList(array $pageIdList){
        $this->pageIdList = $pageIdList;
    }

    public function getTargetItem() : TaobaoTbkScGeneralLinkConvertTargetItemDTO{
        return $this->targetItem;
    }

    public function setTargetItem(TaobaoTbkScGeneralLinkConvertTargetItemDTO $targetItem){
        $this->targetItem = $targetItem;
    }

    public function getItemDto() : array{
        return $this->itemDto;
    }

    public function setItemDto(array $itemDto){
        $this->itemDto = $itemDto;
    }

    public function getPageDto() : array{
        return $this->pageDto;
    }

    public function setPageDto(array $pageDto){
        $this->pageDto = $pageDto;
    }

    public function getShopDto() : array{
        return $this->shopDto;
    }

    public function setShopDto(array $shopDto){
        $this->shopDto = $shopDto;
    }

    public function getMaterialDto() : array{
        return $this->materialDto;
    }

    public function setMaterialDto(array $materialDto){
        $this->materialDto = $materialDto;
    }

    public function getSpecialId() : string{
        return $this->specialId;
    }

    public function setSpecialId(string $specialId){
        $this->specialId = $specialId;
    }


    public function getApiName() : string {
        return "taobao.tbk.sc.general.link.convert";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->bizSceneId)) {
            $requestParam["biz_scene_id"] = TopUtil::convertBasic($this->bizSceneId);
        }

        if (!TopUtil::checkEmpty($this->promotionType)) {
            $requestParam["promotion_type"] = TopUtil::convertBasic($this->promotionType);
        }

        if (!TopUtil::checkEmpty($this->materialList)) {
            $requestParam["material_list"] = TopUtil::convertBasicList($this->materialList);
        }

        if (!TopUtil::checkEmpty($this->relationId)) {
            $requestParam["relation_id"] = TopUtil::convertBasic($this->relationId);
        }

        if (!TopUtil::checkEmpty($this->adzoneId)) {
            $requestParam["adzone_id"] = TopUtil::convertBasic($this->adzoneId);
        }

        if (!TopUtil::checkEmpty($this->sellerIdList)) {
            $requestParam["seller_id_list"] = TopUtil::convertBasicList($this->sellerIdList);
        }

        if (!TopUtil::checkEmpty($this->siteId)) {
            $requestParam["site_id"] = TopUtil::convertBasic($this->siteId);
        }

        if (!TopUtil::checkEmpty($this->itemIdList)) {
            $requestParam["item_id_list"] = TopUtil::convertBasicList($this->itemIdList);
        }

        if (!TopUtil::checkEmpty($this->pageIdList)) {
            $requestParam["page_id_list"] = TopUtil::convertBasicList($this->pageIdList);
        }

        if (!TopUtil::checkEmpty($this->targetItem)) {
            $requestParam["target_item"] = TopUtil::convertStruct($this->targetItem);
        }

        if (!TopUtil::checkEmpty($this->itemDto)) {
            $requestParam["item_dto"] = TopUtil::convertStructList($this->itemDto);
        }

        if (!TopUtil::checkEmpty($this->pageDto)) {
            $requestParam["page_dto"] = TopUtil::convertStructList($this->pageDto);
        }

        if (!TopUtil::checkEmpty($this->shopDto)) {
            $requestParam["shop_dto"] = TopUtil::convertStructList($this->shopDto);
        }

        if (!TopUtil::checkEmpty($this->materialDto)) {
            $requestParam["material_dto"] = TopUtil::convertStructList($this->materialDto);
        }

        if (!TopUtil::checkEmpty($this->specialId)) {
            $requestParam["special_id"] = TopUtil::convertBasic($this->specialId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

