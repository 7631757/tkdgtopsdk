<?php
namespace Topsdk\Topapi\Ability3280\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkDgTpwdReportGetRequest {

    /**
        待查询的口令
     **/
    private $taoPassword;

    /**
        mm_xxx_xxx_xxx的第3段数字
     **/
    private $adzoneId;


    public function getTaoPassword() : string{
        return $this->taoPassword;
    }

    public function setTaoPassword(string $taoPassword){
        $this->taoPassword = $taoPassword;
    }

    public function getAdzoneId() : string{
        return $this->adzoneId;
    }

    public function setAdzoneId(string $adzoneId){
        $this->adzoneId = $adzoneId;
    }


    public function getApiName() : string {
        return "taobao.tbk.dg.tpwd.report.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->taoPassword)) {
            $requestParam["tao_password"] = TopUtil::convertBasic($this->taoPassword);
        }

        if (!TopUtil::checkEmpty($this->adzoneId)) {
            $requestParam["adzone_id"] = TopUtil::convertBasic($this->adzoneId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

