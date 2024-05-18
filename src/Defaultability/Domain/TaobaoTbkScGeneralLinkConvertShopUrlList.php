<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTbkScGeneralLinkConvertShopUrlList {

    /**
        物料对应错误描述
     **/
    public $msg;

    /**
        物料对应错误码
     **/
    public $code;

    /**
        链接信息
     **/
    public $link_info_dto;

    /**
        入参的店铺ID
     **/
    public $input_shop_id;


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

    public function getLinkInfoDto() : TaobaoTbkScGeneralLinkConvertLinkInfoDTO{
        return $this->link_info_dto;
    }

    public function setLinkInfoDto(TaobaoTbkScGeneralLinkConvertLinkInfoDTO $linkInfoDto){
        $this->link_info_dto = $linkInfoDto;
    }

    public function getInputShopId() : string{
        return $this->input_shop_id;
    }

    public function setInputShopId(string $inputShopId){
        $this->input_shop_id = $inputShopId;
    }


}

