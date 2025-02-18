<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTbkScGeneralLinkParseMaterialUrlList {

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
        入参物料链接
     **/
    public $input_material_url;

    /**
        解析成功的场景下，需要补充说明的信息
     **/
    public $extra_info;


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

    public function getLinkInfoDto() : TaobaoTbkScGeneralLinkParseLinkInfoDTO{
        return $this->link_info_dto;
    }

    public function setLinkInfoDto(TaobaoTbkScGeneralLinkParseLinkInfoDTO $linkInfoDto){
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


}

