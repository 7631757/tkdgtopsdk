<?php
namespace Topsdk\Topapi\Ability1042\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoWirelessShareTpwdQueryRequest {

    /**
        淘口令
     **/
    private $passwordContent;


    public function getPasswordContent() : string{
        return $this->passwordContent;
    }

    public function setPasswordContent(string $passwordContent){
        $this->passwordContent = $passwordContent;
    }


    public function getApiName() : string {
        return "taobao.wireless.share.tpwd.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->passwordContent)) {
            $requestParam["password_content"] = TopUtil::convertBasic($this->passwordContent);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

