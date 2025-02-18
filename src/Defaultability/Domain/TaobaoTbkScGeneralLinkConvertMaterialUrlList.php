<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTbkScGeneralLinkConvertMaterialUrlList {

    /**
        物料对应错误描述
     **/
    public $msg;

    /**
        物料对应错误码
     **/
    public $code;

    /**
        营销信息
     **/
    public $promotion_info_dto;

    /**
        券信息
     **/
    public $coupon_info_dto;

    /**
        链接信息
     **/
    public $link_info_dto;

    /**
        入参物料链接
     **/
    public $input_material_url;

    /**
        转链成功的场景下，需要补充说明的信息
     **/
    public $extra_info;

    /**
        多件价券信息
     **/
    public $multiple_items_coupon_info_list;


    public function getMsg() : string{
        return $this->msg;
    }

    public function setMsg(string $msg){
        $this->msg = $msg;
    }

    public function getCode() : int{
        return $this->code;
    }

    public function setCode(int $code){
        $this->code = $code;
    }

    public function getPromotionInfoDto() : TaobaoTbkScGeneralLinkConvertPromotionInfoDTO{
        return $this->promotion_info_dto;
    }

    public function setPromotionInfoDto(TaobaoTbkScGeneralLinkConvertPromotionInfoDTO $promotionInfoDto){
        $this->promotion_info_dto = $promotionInfoDto;
    }

    public function getCouponInfoDto() : TaobaoTbkScGeneralLinkConvertCouponInfoDTO{
        return $this->coupon_info_dto;
    }

    public function setCouponInfoDto(TaobaoTbkScGeneralLinkConvertCouponInfoDTO $couponInfoDto){
        $this->coupon_info_dto = $couponInfoDto;
    }

    public function getLinkInfoDto() : TaobaoTbkScGeneralLinkConvertLinkInfoDTO{
        return $this->link_info_dto;
    }

    public function setLinkInfoDto(TaobaoTbkScGeneralLinkConvertLinkInfoDTO $linkInfoDto){
        $this->link_info_dto = $linkInfoDto;
    }

    public function getInputMaterialUrl() : string{
        return $this->input_material_url;
    }

    public function setInputMaterialUrl(string $inputMaterialUrl){
        $this->input_material_url = $inputMaterialUrl;
    }

    public function getExtraInfo() : string{
        return $this->extra_info;
    }

    public function setExtraInfo(string $extraInfo){
        $this->extra_info = $extraInfo;
    }

    public function getMultipleItemsCouponInfoList() : array{
        return $this->multiple_items_coupon_info_list;
    }

    public function setMultipleItemsCouponInfoList(array $multipleItemsCouponInfoList){
        $this->multiple_items_coupon_info_list = $multipleItemsCouponInfoList;
    }


}

