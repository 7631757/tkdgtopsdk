<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTbkScGeneralLinkConvertEventUrlList {

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
        入参的会场ID
     **/
    public $input_page_id;


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

    public function getInputPageId() : string{
        return $this->input_page_id;
    }

    public function setInputPageId(string $inputPageId){
        $this->input_page_id = $inputPageId;
    }


}

